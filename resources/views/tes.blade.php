@extends('layouts.front')

@section('content')
<div class="row">
    @foreach ($data as $d)
    <div class="col-3">
        <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
      </div>
      @endforeach
</div>
@endsection
