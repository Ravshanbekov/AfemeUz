<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Repair;

class RepairController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:repair-list|repair-create|repair-edit|repair-delete', ['only' => ['index','store']]);
         $this->middleware('permission:repair-create', ['only' => ['create','store']]);
         $this->middleware('permission:repair-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:repair-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repairs=Repair::all();
        return view('admin.repairs.index', compact('repairs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.repairs.create');
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
        Repair::create($data);
        return redirect()->route('admin.repairs.index')->with('success1', 'Muvaffaqiyatli yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repair=Repair::find($id);
        return view('admin.repairs.show',compact('repair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repair=Repair::find($id);
        return view('admin.repairs.edit',compact('repair'));
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
        $repair=Repair::find($id);
        $repair->update($data);
        return redirect()->route('admin.repairs.index')->with('success2', 'Muvaffaqiyatli tahrirlandi');

    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Repair::destroy($id);
        return redirect()->route('admin.repairs.index')->with('succes3', "Muvaffaqiyatli o'chirildi");
    }
}
