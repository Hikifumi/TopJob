<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function joblist()
    {
        $data = Job::all();
        return view('frontend.joblist', compact('data'));

    }

    public function index()
    {
        $data = Job::all();
        return view('backend.job.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Job();
        $data->perusahaan = $request->perusahaan;
        $data->posisi = $request->posisi;
        $data->lokasi = $request->lokasi;
        $data->deskripsi = $request->deskripsi;
        $data->persyaratan = $request->persyaratan;
        $data->tanggal_akhir = $request->tanggal_akhir;
        $data->save();
        return redirect()->route('job.index')->with('alert-success','Data Berhasil Masuk!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Job::find($id);
        return view('backend.job.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'perusahaan' =>'required',
            'posisi' =>'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
            'lokasi' =>'required',
            'tanggal_akhir' =>'required',
        ]);

        $data = Job::findOrFail($id);
        $data->perusahaan = $request->perusahaan;
        $data->posisi = $request->posisi;
        $data->deskripsi = $request->deskripsi;
        $data->persyaratan = $request->persyaratan;
        $data->lokasi = $request->lokasi;
        $data->tanggal_akhir = $request->tanggal_akhir;
        $data->save();

        return redirect()->route('job.index')->with('alert-success','Data Berhasil Di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::destroy($id);

        return redirect()->route('job.index');
    }
}
