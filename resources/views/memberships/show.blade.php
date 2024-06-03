@extends('admin.index')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-white">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Membership Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Admin</a></li>
              <li class="breadcrumb-item active">Memberships</li>
              <li class="breadcrumb-item active">Show</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="container">
    <h1 class="mt-5">Membership Details</h1>
        <table class="table table-bordered bg-white">
            <tr>
                <th>Packet Name:</th>
                <td>{{ $membership->packet_name }}</td>
            </tr>
            <tr>
                <th>Price:</th>
                <td>{{ formatRupiah($membership->price) }}</td>
            </tr>
            <tr>
                <th>Duration:</th>
                <td>{{ $membership->duration }} days</td>
            </tr>
            <tr>
                <th>Trainer:</th>
                <td>{{ $membership->trainer->trainer_name }}</td>
            </tr>
        </table>
        <a class="btn btn-primary" href="{{ route('memberships.index') }}">Back</a>
</div>
@endsection
