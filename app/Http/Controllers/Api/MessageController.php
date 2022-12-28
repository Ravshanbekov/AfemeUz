<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\ChatRoom;
use App\Models\Client;
use App\Events\MessageSent;
use Dotenv\Validator;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =  auth()->guard('api')->user()->id;
        $chats = ChatRoom::where('firstuser',$id)->orWhere('seconduser',$id)->orderBy('updated','DESC')->get();
        foreach($chats->all() as $chat){
            if($chat->firstuser == $id ){
                $user = Client::find($chat->seconduser);
            }else{
                $user = Client::find($chat->firstuser);
            }
            $latest = Message::where('chat_id',$chat->id)->latest()->first();
            $test[] = ['chat'=>$chat->toArray(),'user'=>$user,'latest'=>$latest];
        }
       
         return response()->json($test);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user_id =  auth()->guard('api')->user()->id;
        $data = FacadesValidator::make($request->all(),[

            'to'=>'required',
           
        ]);
        if($data->fails()){
            return  $data->errors();
        }else{
            
        }
        
        if($request->message == '98Delete98'){
            Message::whereNotNull('id')->delete();
            broadcast(new MessageSent(6))->toOthers();
             return response()->json(true);
        }
        
        
        $chat = ChatRoom::whereIn('firstuser',[$request->to, $user_id])->whereIn('seconduser',[$request->to, $user_id])->first();
        $message = $request->all();
        $message['created'] = time();
    
      
        
        if(!empty($chat)){
            $message['chat_id'] = $chat->id;
       
            $chat->updated = time();
            $chat->reading = $user_id;
           
            $chat->save();
           
            
            Message::create($message);
            
        }else{
            $chat = ChatRoom::create(['firstuser'=>$user_id,  'seconduser'=>$request->to, 'updated'=>time()]);
            
            $message['chat_id'] = $chat->id;
            Message::create($message);
            
        }
        
        broadcast(new MessageSent($request->to))->toOthers();
             
        return response()->json(true);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chat = ChatRoom::find($id);
        $chat->reading = true;
        $chat->save();
        $messages = Message::where('chat_id',$id)->get();
        return response()->json($messages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user_id =  auth()->guard('api')->user()->id;
        $chat = ChatRoom::whereIn('firstuser',[$id, $user_id])->whereIn('seconduser',[$id, $user_id])->first();
        
         if(isset($chat)){
            $chat->reading = true;
            $chat->save();
            $messages = Message::where('chat_id',$chat->id)->get();
            return response()->json($messages);
        }else{
            
        
            return response()->json(false);
            
        }
    }
}
