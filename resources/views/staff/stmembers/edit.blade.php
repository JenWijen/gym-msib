<!-- resources/views/admin/trainers/edit.blade.php -->

@extends('staff.master')

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
              <li class="breadcrumb-item"><a href="/staff/dashboard">Staff</a></li>
              <li class="breadcrumb-item active">Members</li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="container">
    <h1 class="mt-5">Edit Member</h1>
    <form action="{{ route('memb_only.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ $member->name }}" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" name="contact" value="{{ $member->contact }}" required>
        </div>
        <div class="form-group">
            <label for="membership_id">Membership:</label>
            <select class="form-control" name="membership_id" required>
                @foreach($memberships as $membership)
                    <option value="{{ $membership->id }}" {{ $member->membership_id == $membership->id ? 'selected' : '' }}>
                        {{ $membership->packet_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label for="startdate">Start Date:</label>
          <input type="date" class="form-control" name="startdate" value="{{ $member->startdate }}" required>
      </div>
        <a class="btn btn-primary" href="{{ route('memb_only.index') }}">Back</a>
        <button type="submit" class="btn btn-success alerts">Update</button>
    </form>
</div>
@endsection
