<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','store']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=$request->all();

        if($request->file('icon')){
            $file=$request->file('icon');
            $icon_name=time().$file->getClientOriginalName();
            $file->move('admin2/categories/', $icon_name);
            $data['icon']=$icon_name;
        }
        
       
         // $message=<<<TEXT
        // Murojat qoldirildi!
        // Kategoriya: {$request->name_uz}
        // TEXT;

        // $apiToken = "5203278887:AAFMvSEmPohUnQ96h7vfB7brZhYX87Y62WU";
        // $data = [
        //     'chat_id' => '-1001701793996',
        //     'text' => $message,
        // ];
        // $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
        
      
        //   $url = "https://reqbin.com/echo";

        //   $curl = curl_init($url);
        //     curl_setopt($curl, CURLOPT_URL, $url);
        //      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //     $headers = array(
        //       "Accept: */*",
        //     );
        //     curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //     //for debug only!
        //     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        //     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            
        //     $resp = curl_exec($curl);
        //     curl_close($curl);
        //     var_dump($resp);
            
            Category::create($data);

        return redirect()->route('admin.categories.index')->with('success1', 'Muvaffaqiyatli yaratildi');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $category=Category::find($id);
        return view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.categories.edit',compact('category'));
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
        $data=$request->all();
 
         if($request->file('icon')){
            $file=$request->file('icon');
            $icon_name=time().$file->getClientOriginalName();
            $file->move('admin2/categories/', $icon_name);
            $data['icon']=$icon_name;
        }
       
        $category=Category::find($id);
        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success2', 'Muvaffaqiyatli tahrirlandi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
       
        $category=Category::find($id);
        $category->products()->update(['htype_id'=>null]);
        $category->delete();
       return redirect()->route('admin.categories.index')->with('success3', "Muvaffaqiyatli o'chirildi");
        
        
    }
}