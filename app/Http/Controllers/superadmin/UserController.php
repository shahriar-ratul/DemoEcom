<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $users = User::whereIn('role_id',[1])->latest()->get();
        return view('backend.superadmin.user.index',compact('users'));
    }
    public function customer()
    {
        $users = User::whereIn('role_id',[4])->latest()->get();
        return view('backend.superadmin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.superadmin.user.create');
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
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role_id' => ['required'],
            ]);


            $user = new User();
            $user->firstName = $request->firstName;
            $user->lastName = $request->lastName;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password =  Hash::make($request->password);
            $user->role_id = $request->role_id;
            $user->save();

        toastr()->success('User Added Successfuly');
        return redirect()->route('superadmin.user.index');
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
        $user = User::find($id);
        return view('backend.superadmin.user.edit',compact('user'));
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
            'role_id' => ['required'],
            ]);


            $user = User::find($id);
            $user->firstName = $request->firstName;
            $user->lastName = $request->lastName;
            $user->username = $request->username;
            $user->role_id = $request->role_id;
            $user->save();

        toastr()->success('User Updated Successfuly');
        return redirect()->route('superadmin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->id != $id){
            User::find($id)->delete();
            toastr()->success('User Successfully Deleted.');
            return redirect()->back();
        }else{
            toastr()->warning('You cannot delete this user.');
            return redirect()->back();
        }
    }
}
