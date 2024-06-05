@extends('admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-white">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">package Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Admin</a></li>
              <li class="breadcrumb-item active">packages</li>
              <li class="breadcrumb-item active">Show</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="container">
    <h1 class="mt-5">package Details</h1>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Package Name:</th>
                            <td>{{ $package->packet_name }}</td>
                        </tr>
                        <tr>
                            <th>Price:</th>
                            <td>{{ $package->price }}</td>
                        </tr>
                        <tr>
                            <th>Duration:</th>
                            <td>{{ $package->duration }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a class="btn btn-primary mt-3" href="{{ route('packages.index') }}">Back</a>
</div>
@endsection
