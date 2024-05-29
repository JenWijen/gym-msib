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
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<div class="container">
    <h1 class="mt-5">Edit Trainer</h1>
    <form action="{{ route('trainers.update', $trainer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="trainer_name">Name:</label>
            <input type="text" class="form-control" name="trainer_name" value="{{ $trainer->trainer_name }}">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" name="gender">
                <option value="L" {{ $trainer->gender == 'L' ? 'selected' : '' }}>Male</option>
                <option value="P" {{ $trainer->gender == 'P' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" name="contact" value="{{ $trainer->contact }}">
        </div>
        <a class="btn btn-primary" href="{{ route('trainers.index') }}">Back</a>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
