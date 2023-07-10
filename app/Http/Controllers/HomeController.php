<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Carbon\Carbon;
use App\Application;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Job::all();
        return view('home');
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('frontend.profile', compact('data'));
    }
    
    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;

        $data = \App\User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->role_name = $request->role_name;
        $data->save();

        return redirect()->route('profile')->with('alert-success','Data Berhasil Diubah!');
    }

    public function detail($id)
    {
        $data = Job::find($id);
        return view('frontend.detail',compact('data'));
    }

    public function appstore(Request $request)
    {
        $data = new Application();
        $data->pelamar_id = $request->pelamar_id;
        $data->lowongan_pekerjaan_id = $request->lowongan_pekerjaan_id;
        $data->tanggal_lamaran = Carbon::now();
        $data->posisi = $request->posisi;
        $data->status = "Processing";
        $data->save();

        return redirect()->back()->with('alert-success', 'Application has been processed');
    }

    public function report()
    {
        $data = Application::join('users', 'users.id','=' ,'applications.pelamar_id')
        ->join('jobs', 'jobs.id','=' ,'applications.lowongan_pekerjaan_id')
        ->select('applications.*','users.name','users.email', 'jobs.posisi','jobs.perusahaan')
        ->get();
        return view('backend.report',compact('data'));
    }

    public function export(Request $request)
{
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');

    $applications = Application::join('users', 'users.id','=' ,'applications.pelamar_id')
    ->join('jobs', 'jobs.id','=' ,'applications.lowongan_pekerjaan_id')
    ->select('applications.*','users.name','users.email', 'jobs.posisi','jobs.perusahaan')
    ->whereDate('applications.created_at', '>=', $startDate)
                                ->whereDate('applications.created_at', '<=', $endDate)
                                ->get();

    $data = [
        'applications' => $applications,
        'startDate' => $startDate,
        'endDate' => $endDate,
    ];

    $pdf = PDF::loadView('backend.export', $data);
    return $pdf->download('application_report.pdf');
}
}
