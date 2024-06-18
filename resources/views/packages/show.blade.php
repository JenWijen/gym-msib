@extends('admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
  <div class="stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Package Information</h4>
        <p class="card-description">
          Package Details
        </p>
          <table class="table table-bordered">
            <tr>
               <th>Package Name:</th>
               <td>{{ $package->package_name }}</td>
            </tr>
            <tr>
               <th>Price:</th>
               <td>{{ $package->price }}</td>
            </tr>
            <tr>
               <th>Duration:</th>
               <td>{{ $package->duration }}</td>
            </tr>
          </table><br>
          <a class="btn btn-primary" href="{{ route('packages.index') }}">Back</a>
      </div>
    </div>
  </div>
</div>
@endsection
