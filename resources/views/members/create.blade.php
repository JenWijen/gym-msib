<!-- resources/views/admin/trainers/create.blade.php -->

@extends('admin.index')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-white">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Member Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Admin</a></li>
              <li class="breadcrumb-item active">Members</li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="container">
    <h1 class="mt-5">Add Member</h1>
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" name="contact" required>
        </div>
        <div class="form-group">
            <label for="membership_id">Membership:</label>
            <select class="form-control" name="membership_id" required>
                @foreach($memberships as $membership)
                    <option value="{{ $membership->id }}">{{ $membership->packet_name }}</option>
                @endforeach
            </select>
        </div>
        <a class="btn btn-primary" href="{{ route('members.index') }}">Back</a>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
