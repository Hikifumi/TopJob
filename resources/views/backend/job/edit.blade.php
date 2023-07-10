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
                      <h4 class="card-title"> Job Table</h4>
                    </div>
              </div>
          </div>
          <div class="card-body">
                <form action="{{ route('job.update', $data->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-12 pr-1">
                    <div class="form-group">
                      <label>Company</label>
                      <input type="text" class="form-control" value="{{ $data->perusahaan }}" id="perusahaan" name="perusahaan">
                    </div>
                  </div>
                  <div class="col-12 pr-1">
                    <div class="form-group">
                      <label>Position</label>
                      <input type="text" class="form-control" value="{{ $data->posisi }}" id="posisi" name="posisi">
                    </div>
                  </div>
                  <div class="col-12 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">End Date</label>
                      <input type="date" class="form-control" value="{{ $data->tanggal_akhir }}" id="tanggal_akhir" name="tanggal_akhir">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 pr-1">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="deskripsi" id="" class="form-control">{!! $data->deskripsi !!}</textarea>
                    </div>
                  </div>
                  <div class="col-12 pr-1">
                    <div class="form-group">
                      <label>Condition</label>
                      <textarea name="persyaratan" id="" class="form-control">{!! $data->persyaratan !!}</textarea>
                    </div>
                  </div>
                  <div class="col-12 pr-1">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" value="{{ $data->posisi }}" id="lokasi"  name="lokasi">
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
