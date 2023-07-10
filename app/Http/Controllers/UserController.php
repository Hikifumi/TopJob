<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('backend.users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
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
            'name' =>'required',
            'email' =>'required|email',
            'password' => 'required',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role_name = $request->role_name;
        $data->password = bcrypt($request->password);
        $data->save();

        $data->roles()->attach(Role::where('name', $request->role_name)->first());
        return redirect()->route('user.index')->with('alert-success','Data Berhasil Masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('backend.users.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('backend.users.edit', compact('data'));
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
            'name' =>'required',
            'email' =>'required|email',
        ]);

        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role_name = $request->role_name;
        if($request->password){
            $data->password = bcrypt($request->password);
            }
        $data->save();
        if($request->role_name)
        {
            $data->roles()->sync(Role::where('name', $request->role_name)->first());
        }
        return redirect()->route('user.index')->with('alert-success','Data Berhasil Di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect(route('user.index'))->with('alert-success','Data Berhasil dihapus');
    }
}
