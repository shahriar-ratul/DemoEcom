<?php

namespace App\Http\Controllers\superadmin;

use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
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
        $banners = Banner::latest()->get();
        return view('backend.superadmin.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.superadmin.banner.create');
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
            'status' => 'required',
            'image' => 'required','image|mimes:jpeg,png,jpg|max:8192',
            ]);

            $banner = new Banner();
            $banner->title  = $request->title;
            $banner->status = $request->status;

            $path = storage_path('banner/uploads');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            if($request->file('image')){
                $file = $request->file('image');
                $name = uniqid() . '_' . trim($file->getClientOriginalName());
                $file->move($path, $name);
                $banner->image = $name;
            }
        $banner->created_by = Auth::user()->id;
        $banner->updated_by = Auth::user()->id;
        $banner->save();
        toastr()->success('Banner Added Successfuly');
        return redirect()->route('superadmin.banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner =Banner::find($id);
        return view('backend.superadmin.banner.edit',compact('banner'));
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
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:8192',
        ]);

        $banner = Banner::find($id);
        $banner->title  = $request->title;
        $banner->status = $request->status;

        $path = storage_path('banner/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        if($request->file('image')){
            $file = $request->file('image');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $banner->image = $name;
        }

        $banner->created_by = Auth::user()->id;
        $banner->updated_by = Auth::user()->id;
        $banner->save();
        toastr()->success('Banner Added Successfuly');
        return redirect()->route('superadmin.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);

//        $image = $banner->image;
//        if($image!=null && $image != "default.jpg"){
//            $filepath = storage_path().'/banner/uploads/'.$image;
//            File::delete($filepath);
//        }
        $banner->delete();

        toastr()->success('Banner Successfully Deleted.');
        return redirect()->back();
    }
}
