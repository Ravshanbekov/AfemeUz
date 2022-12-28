<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Traits\ApiResponcer;
use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Reting;
use App\Models\Potpiska;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SaveController extends Controller
{
    use ApiResponcer;

    public function like($id){

        $user_id = auth()->guard('api')->user()->id;
        $save = Like::where('user_id',$user_id)->get();
        
        if ($save) {
            
            foreach($save as $post){
                if($post->post_id == $id){
                    $post->delete();
                    return true;
                }
            }
        }

        $data['user_id'] = $user_id;
        $data['post_id'] = $id;
        Like::create($data);
        return true;
    }
    public function potpiska($id){

        $user_id = auth()->guard('api')->user()->id;
        $save = Potpiska::where('user_id',$user_id)->get();
        
        if ($save) {
            
            foreach($save as $post){
                if($post->reltor_id == $id){
                    $post->delete();
                    return true;
                }
            }
        }

        $data['user_id'] = $user_id;
        $data['reltor_id'] = $id;
        Potpiska::create($data);
        return true;
    }
    
    public function reting(Request $request){


        $data=Validator::make($request->all(), [
            'reting' => ' required ',
            
        ]);
        

        if($data->fails()){
            return $this->error(null, 400, $data->errors());
        }

        $author = auth()->guard('api')->user()->id;
        $reting = Reting::where('author', $author)->get();
        if($request->post_id){

            $check=$reting->where('post_id', $request->post_id)->first();
        }else{

            $check=$reting->where('reltor_id', $request->reltor_id)->first();
        }
        $data = $request->all();
        $data['author']=$author;
        if (!empty($check->reltor_id)) {
            if($request->reting){
                $check->update($data);
                return $this->success(null,"reting o'zgartirildi",200);
            }else{
                $check->delete();
                return $this->success(null,"reting o'chirildi",200);
            }
        }else{
            Reting::create($data);
            return $this->success(null,"reting kiritildi",200);
        }
    }
    public function comment(Request $request)
    {
        $data = Validator::make($request->all(), [
            'comment' => 'required'
        ]);
        if ($data->fails()) {
            return $this->error(null, 400, $data->errors());
        }else{
            $author = auth()->guard('api')->user()->id;
            $data = $request->all();
            $data['author']=$author;

            Comment::create($data);
            $massage= "Ma'lumot kiritildi";
            return $this->success(null,$massage,200);
        }

    }
}
