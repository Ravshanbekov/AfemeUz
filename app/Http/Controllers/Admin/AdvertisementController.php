<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class AdvertisementController extends Controller
{
 function __construct()
    {
         $this->middleware('permission:advertisement-list|advertisement-create|advertisement-edit|advertisement-delete', ['only' => ['index','store']]);
         $this->middleware('permission:advertisement-create', ['only' => ['create','store']]);
         $this->middleware('permission:advertisement-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:advertisement-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements = Advertisement::latest()->get();

        return view('admin.advertisements.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertisements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->file('image')) {
            $file = $request->file('image');
            $image_name = time() . $file->getClientOriginalName();
            $file->move('admin2/advertisements/', $image_name);
            $data['image'] ="http://ali98.uz/admin2/advertisements/".$image_name;
        }

        Advertisement::create($data);
        return redirect()->route('admin.advertisements.index')->with('success1', 'Muvaffaqiyatli kritildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advertisement = Advertisement::find($id);
        return view('admin.advertisements.show', compact('advertisement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advertisement = Advertisement::find($id);
        return view('admin.advertisements.edit', compact('advertisement'));
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
        $data = $request->all();

        if ($request->file('image')) {
            $file = $request->file('image');
            $image_name = time() . $file->getClientOriginalName();
            $file->move('admin2/advertisements/', $image_name);
            $data['image'] ="http://ali98.uz/admin2/advertisements/".$image_name;
        }

        $advertisement = Advertisement::find($id);
        $advertisement->update($data);

        return redirect()->route('admin.advertisements.index')->with('success2', 'Muvaffaqiyatli tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Advertisement::destroy($id);
        return redirect()->route('admin.advertisements.index')->with('success3', "Muvaffaqiyatli o'chirildi");
    }
}