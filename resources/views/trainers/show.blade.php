@extends('admin.master')

@section('content')

<div class="container-fluid">
  <div class="stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Trainer Information</h4>
        <p class="card-description">
          Trainer Details
        </p>
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
          </table><br>
          <a class="btn btn-primary" href="{{ route('trainers.index') }}">Back</a>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection
