@extends('layouts.backend')

@section('title')
 Users Create
@endsection

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="row">
              <div class="col">
                  <div class="card-header">
                      <h4 class="card-title"> Application Table</h4>
                    </div>
              </div>
          </div>
          <div class="card-body">
              <form action="{{ route('application.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <label>Applicant</label>
                      <input type="text" class="form-control" value="" id="pelamar_id" name="pelamar_id">
                    </div>
                  </div>
                  <div class="col-md-3 px-1">
                    <div class="form-group">
                      <label>Job Vacancy</label>
                      <input type="text" class="form-control" value="" id="lowongan_pekerjaan_id" name="lowongan_pekerjaan_id">
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Application Date</label>
                      <input type="date" class="form-control" id="tanggal_lamaran" name="tanggal_lamaran">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Position</label>
                      <input type="text" class="form-control" value="" id="posisi" name="posisi">
                    </div>
                  </div>
                  <div class="col-md-6 pl-1">
                    <div class="form-group">
                      <label>Status</label>
                      <input type="text" class="form-control" value="" id="status" name="status">
                    </div>
                  </div>
                </div>
                <div class="p-2">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
