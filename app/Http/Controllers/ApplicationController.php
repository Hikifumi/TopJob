<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Application::join('users', 'users.id','=' ,'applications.pelamar_id')
            ->join('jobs', 'jobs.id','=' ,'applications.lowongan_pekerjaan_id')
            ->select('applications.*','users.name','users.email', 'jobs.posisi','jobs.perusahaan')
            ->get();
        return view('backend.application.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.application.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Application::create($request->all());
        return redirect()->route('application.index')->with('alert-success','Data Berhasil Masuk!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Application::find($id);
        return view('backend.application.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'pelamar_id' =>'required',
            'lowongan_pekerjaan_id' =>'required',
            'tanggal_lamaran' => 'required',
            'posisi' => 'required',
            'status' =>'required',
        ]);

        $data = Application::findOrFail($id);
        $data->pelamar_id = $request->pelamar_id;
        $data->lowongan_pekerjaan_id = $request->lowongan_pekerjaan_id;
        $data->tanggal_lamaran = $request->tanggal_lamaran;
        $data->posisi = $request->posisi;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('application.index')->with('alert-success','Data Berhasil Di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Application::destroy($id);

        return redirect()->route('application.index');
    }
}
