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
                      <h4 class="card-title"> Jobs Table</h4>
                    </div>
              </div>
              <div class="col text-right" style="margin-right: 30px;">
                  <a href="{{ route('job.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Data</a>
              </div>
          </div>
          <div class="card-body">
                <div class="table-responsive">
            <table class="table p-2">
              <thead class=" text-primary">
                <th>
                  Company
                </th>
                <th>
                  Position
                </th>
                <th>
                  Description
                </th>
                <th>
                  Condition
                </th>
                <th>
                  Location
                </th>
                <th>
                  End Date
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                @foreach($data as $item)
                <tr>
                  <td>{{ $item->perusahaan }}</td>
                  <td>{{ $item->posisi }}</td>
                  <td>{{ $item->deskripsi }}</td>
                  <td>{{ $item->persyaratan }}</td>
                  <td>{{ $item->lokasi }}</td>
                  <td>{{ $item->tanggal_akhir }}</td>
                  <td>
                       <a href="{{ route('job.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                       <a href="{{ route('job.destroy', $item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><i class="fa fa-trash"></i> Delete</a>
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
