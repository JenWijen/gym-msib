@extends('admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">packages Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Admin</a></li>
                        <li class="breadcrumb-item active">packagess</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 class="mt-5">Edit packages</h2>
                </div>
                <div class="pull-right">
                </div>
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('packages.update', $package->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Packet Name:</strong>
                        <input type="text" name="packet_name" value="{{ $package->packet_name }}" class="form-control" placeholder="Packet Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input type="text" step="0.01" name="price" value="{{ $package->price }}" class="form-control" id="IDR" placeholder="Price">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Duration:</strong>
                        <input type="number" name="duration" value="{{ $package->duration }}" class="form-control" placeholder="Duration (in days)">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('packages.index') }}">Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('IDR').addEventListener('keyup', function(e) {
      let cursorPosition = this.selectionStart;
      let value = parseInt(this.value.replace(/[^,\d]/g, ''));
      let originalLength = this.value.length;
      if (isNaN(value)) {
        this.value = "";
      } else {    
        this.value = value.toLocaleString('id-ID', {
          minimumFractionDigits: 0,
          maximumFractionDigits: 0
        }).replace(/\./g, '.');
        cursorPosition = this.value.length - originalLength + cursorPosition;
        this.setSelectionRange(cursorPosition, cursorPosition);
      }
    });
  });
</script>
    @endsection