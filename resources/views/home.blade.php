@extends('layouts.front')

@section('content')
<div class="row">
    @foreach ($data as $d)
    <div class="col-3">
        <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $d->posisi }}</h5>
              <p class="card-text">{{ $d->perusahaan }}</p>
              <a href="{{ route('detail',$d->id) }}" class="btn btn-primary">Detail</a>
            </div>
          </div>
      </div>
      @endforeach
</div>
@endsection
