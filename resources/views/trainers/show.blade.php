@extends('admin.master')

@section('content')

<div class="container-fluid">
  <div class="stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Trainer Form</h4>
        <p class="card-description">
          Edit trainer information
        </p>
          <h1 class="mt-5">Trainer Details</h1>
          <table class="table table-bordered">
          <tr>
            <th>Name:</th>
            <td>{{ $trainer->trainer_name }}</td>
          </tr>
          <tr>
            <th>Gender:</th>
            <td>{{ $trainer->gender }}</td>
          </tr>
          <tr>
            <th>Contact:</th>
            <td>{{ $trainer->contact }}</td>
          </tr>
          <tr>
            <th>Address:</th>
            <td>{{ $trainer->address }}</td>
          </tr>
          </table>
          <a class="btn btn-primary" href="{{ route('trainers.index') }}">Back</a>
      </div>
    </div>
  </div>
</div>

@endsection
