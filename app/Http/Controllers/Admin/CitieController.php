<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Region;

class CitieController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:citie-list|citie-create|citie-edit|citie-delete', ['only' => ['index','store']]);
         $this->middleware('permission:citie-create', ['only' => ['create','store']]);
         $this->middleware('permission:citie-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:citie-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities=City::all();
        $regions=Region::all();
        return view('admin.cities.index', compact('cities','regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions=Region::all();
        return view('admin.cities.create',compact('regions'));
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

        City::create($data);
        return redirect()->route('admin.cities.index')->with('success1','Muvaffaqiyatli yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citie=City::find($id);
        $regions=Region::all();
        return view('admin.cities.show', compact('citie', 'regions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citie=City::find($id);
        $regions=Region::all();
        return view('admin.cities.edit', compact('citie', 'regions'));
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
        $citie=City::find($id);
        $citie->update($data);

        return redirect()->route('admin.cities.index')->with('success2','Muvaffaqiyatli tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        City::destroy($id);

        return redirect()->route('admin.cities.index')->with('success3', "Muvaffaqiyatli o'chirildi");
    }
}