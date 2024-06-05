@extends('admin.master')

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
              <li class="breadcrumb-item active">Show</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="container">
    <h1 class="mt-5">Member Details</h1>
    <table class="table table-bordered bg-white">
      <tr>
          <th>Name:</th>
          <td>{{ $member->name }}</td>
      </tr>
      <tr>
          <th>Contact:</th>
          <td>{{ $member->contact }}</td>
      </tr>
      <tr>
          <th>Membership:</th>
          <td>{{ $member->membership->packet_name }}</td>
      </tr>
      <tr>
          <th>Start date:</th>
          <td>{{ $member->startdate }}</td>
      </tr>
  </table>
    <a class="btn btn-primary" href="{{ route('admin.members.index') }}">Back</a>
</div>
@endsection

