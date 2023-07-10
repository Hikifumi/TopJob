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
                      <h4 class="card-title"> Users Table</h4>
                    </div>
              </div>
              <div class="col text-right">
                  <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Data</a>
              </div>
          </div>
          <div class="card-body">
                {{-- didieu boy isi sesuai konten --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
