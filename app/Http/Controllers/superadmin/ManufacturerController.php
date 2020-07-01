<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $manufacturers = Manufacturer::get();
        return view('backend.superadmin.manufacturer.index',compact('manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.superadmin.manufacturer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','unique:categories'],
            ]);
        $manufacturer = new Manufacturer();
        $manufacturer->name = $request->name;
        $manufacturer->status =  $request->status;
        $manufacturer->created_by = Auth::user()->id;
        $manufacturer->updated_by = Auth::user()->id;
        $manufacturer->save();
        toastr()->success('Manufacturer Added Successfuly');
        return redirect()->route('superadmin.manufacturer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manufacturer= Manufacturer::find($id);
        return view('backend.superadmin.manufacturer.edit',compact('manufacturer'));
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
        $this->validate($request,[
            'name' => ['required'],
            ]);
        $manufacturer = Manufacturer::find($id);
        $manufacturer->name = $request->name;
        $manufacturer->status =  $request->status;
        $manufacturer->updated_by = Auth::user()->id;
        $manufacturer->save();
        toastr()->success('Manufacturer Updated Successfuly');
        return redirect()->route('superadmin.manufacturer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manufacturer::find($id)->delete();
        toastr()->success('Manufacturer Successfully Deleted.');
        return redirect()->back();
    }
}
