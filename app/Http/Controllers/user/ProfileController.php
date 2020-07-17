<?php

namespace App\Http\Controllers\user;

use App\Category;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
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
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();

        return view('frontend.pages.user.profile',compact('categories','subcategories'));
    }
    public function changepassword()
    {
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();

        return view('frontend.pages.user.change_password',compact('categories','subcategories'));
    }
    public function changepasswordstore(Request $request)
    {
        $this->validate($request,[
            'current_password' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

            ]);

        if (Hash::check($request->current_password, Auth::user()->password)) {
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            toastr()->success('Password Changed Successfully');
            return  redirect()->route('user.profile.index');
        }else{
            toastr()->error('Current Password Does not Match');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
}
