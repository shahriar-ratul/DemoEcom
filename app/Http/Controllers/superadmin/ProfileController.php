<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
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
        return view('backend.superadmin.user.profile');
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
        $user = User::find($id);
        return view('backend.superadmin.user.profile_update',compact('user'));
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
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => 'image|mimes:jpeg,png,jpg|max:8192',

            ]);


        $user = User::find($id);

        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->username = $request->username;
        // $user->email = $request->email;

        $path = storage_path('user/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if($request->file('image')){
            $file = $request->file('image');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $user->image = $name;
        }

        $user->save();
        toastr()->success('Profile Updated Successfuly');
        return redirect()->route('superadmin.profile.index');
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

    public function changePassword(){

        return view('backend.superadmin.user.new_password');
    }
    public function changePasswordstore(Request $request){

        $this->validate($request,[
            'current_password' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

            ]);

        if (Hash::check($request->current_password, Auth::user()->password)) {
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            toastr()->success('Password Changed Successfully');
            return  redirect()->route('superadmin.profile.index');
        }else{
            toastr()->error('Current Password Does not Match');
            return redirect()->back();
        }

    }
}
