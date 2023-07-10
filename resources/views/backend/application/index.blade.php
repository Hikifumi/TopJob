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
              {{-- <div class="col text-right">
                  <a href="{{ route('application.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Data</a>
              </div> --}}
          </div>
          <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Applicant Name
                </th>
                <th>
                  Company
                </th>
                <th>
                  Application Date
                </th>
                <th>
                  Position
                </th>
                <th>
                  Status
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                @foreach($data as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->perusahaan }}</td>
                  <td>{{ $item->tanggal_lamaran }}</td>
                  <td>{{ $item->posisi }}</td>
                  <td>{{ $item->status }}</td>
                  <td>
                       <a href="{{ route('application.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                       <a href="{{ route('application.destroy', $item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection
