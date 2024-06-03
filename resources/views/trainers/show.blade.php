@extends('admin.index')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header bg-white">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Trainer Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Admin</a></li>
            <li class="breadcrumb-item active">Trainers</li>
            <li class="breadcrumb-item active">Show</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<div class="container">
    <h1 class="mt-5">Trainer Details</h1>
    <table class="table table-bordered bg-white">
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
@endsection
