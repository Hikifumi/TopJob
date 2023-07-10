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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="card">
          <div class="row">
              <div class="col">
                  <div class="card-header">
                      <h4 class="card-title"> Application Table</h4>
                    </div>
              </div>
          </div>
          <div class="card-body">
               <form action="{{ route('application.update', $data->id) }}" enctype="multipart/form-data" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <input type="hidden" class="form-control" value="{{ $data->pelamar_id }}" id="pelamar_id" name="pelamar_id">
                    </div>
                  </div>
                  <div class="col-md-3 px-1">
                    <div class="form-group">
                      <input type="hidden" class="form-control" value="{{ $data->lowongan_pekerjaan_id }}" id="lowongan_pekerjaan_id" name="lowongan_pekerjaan_id">
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <input type="hidden" class="form-control" value="{{ $data->tanggal_lamaran }}" id="tanggal_lamaran" name="tanggal_lamaran">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <input type="hidden" class="form-control" value="{{ $data->posisi }}" id="posisi" name="posisi">
                    </div>
                  </div>
                  <div class="col-md-12 pr-1">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" id="" class="form-control">
                        <option value="Rejected">Rejected</option>
                        <option value="Accepted">Accepted</option>
                      </select>
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
