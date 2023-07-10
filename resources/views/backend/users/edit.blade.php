@extends('layouts.backend')

@section('title')
 Users Edit
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
                      <h4 class="card-title"> Users Edit</h4>
                    </div>
              </div>
          </div>
          <div class="card-body">
            <form action="{{  route('user.update', $data->id) }}" enctype="multipart/form-data" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" value="{{ $data->name }}" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" id="email" value="{{ $data->email }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="role_name" class="form-label">Role Name</label>
                    <select name="role_name" class="form-control" id="">
                        <option value="admin" @if($data->role_name == 'admin') selected @endif>Admin</option>
                        <option value="user" @if($data->role_name == 'user') selected @endif>User</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
