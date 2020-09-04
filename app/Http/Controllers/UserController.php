<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use View;
use Session;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return View::make('profile.index')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = new User;

        // $user->firstname = $request ->input('firstname');
        // $user->lastname = $request->input('lastname');
        // $user->username = $request->input('username');
        // $user->email = $request->input('email');
        // $user->password = bcrypt($request->input('password'));
        // $user->contact = $request->input('contact');
        // $user->address = $request->input('address');

        // $user->save();

        return View::make('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->firstname= $request->input('firstname');
        $user->lastname= $request->input('lastname');
        $user->username= $request->input('username');
        $user->email= $request->input('email');
        $user->password= $request->input('password');
        $user->address= $request->input('address');
        $user->contact= $request->input('contact');
        $user->save();

        Session::flash('message','Successfully Logged In.');
        return Redirect::to('/shop');
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
