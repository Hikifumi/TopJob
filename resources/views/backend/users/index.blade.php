@extends('layouts.backend')

@section('title')
 Users
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
          <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role_name }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>

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
