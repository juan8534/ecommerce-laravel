<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Profile;
use Alert;


class UsersController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
        $this->middleware("admin");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::orderBy('id', 'ASC')->paginate(10);     
        $users->each(function($users){
            $users->profiles;
        });
        return view('users.index')->with('users', $users);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = Profile::orderby('description','ASC')->pluck('description','id');
        return view('users.create')->with('profile', $profile);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);  
        $user->save();
        Alert::success('Usuario creado correctamente!!!');
        return redirect()->route('users.index');
  
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
        $user->profiles;
        $profiles = Profile::orderBy('description','DESC')->pluck('description','id');
        return view('users.edit')
        ->with('user', $user)
        ->with('profiles', $profiles);
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
        $user = User::find($id);
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        Alert::success('Usuario Editado correctamente!!!');
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::success('Usuario Eliminado correctamente!!!');
        return redirect()->route('users.index');
    }
}
