<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeMail;
use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'email' => [ 'required', 'unique:subscribes'],
        ]);

        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();

        Mail::to($request->email)->send(new SubscribeMail());

        toastr()->success('Thanks for your Subscription');
        return redirect()->back();

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(subscribe $subscribe)
    {
        //
    }
}
