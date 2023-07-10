@extends('layouts.backend')

@section('title')
 Report
@endsection

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Application Table</h4>
                <form method="GET" action="{{ route('report.export') }}" class="form-inline">
                  <div class="form-group mx-2">
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="start_date" id="start_date" class="form-control">
                  </div>
                  <div class="form-group mx-2">
                    <label for="end_date">End Date:</label>
                    <input type="date" name="end_date" id="end_date" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Export to PDF</button>
                </form>
              </div>

          <div class="row">
              <div class="col">
                  <div class="card-header">
                      <h4 class="card-title"> Application Table</h4>
                    </div>
              </div>
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
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                    <tr>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->perusahaan }}</td>
                      <td>{{ $item->tanggal_lamaran }}</td>
                      <td>{{ $item->posisi }}</td>
                      <td>{{ $item->status }}</td>
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
