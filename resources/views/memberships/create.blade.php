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
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <h1 class="mt-5">Add Membership</h1>
        <form id="membership-form" action="{{ route('memberships.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="packet_name">Packet Name:</label>
                <input type="text" class="form-control" name="packet_name" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="IDR" name="price" required>
            </div>
            <div class="form-group">
                <label for="duration">Duration:</label>
                <input type="text" class="form-control" name="duration" required>
            </div>
            <div class="form-group">
                <label for="trainer_id">Trainer:</label>
                <select class="form-control" name="trainer_id" required>
                    <option value="" disabled selected>Select Trainer</option>
                    @foreach ($trainers as $trainer)
                    <option value="{{ $trainer->id }}">{{ $trainer->trainer_name }}</option>
                    @endforeach
                </select>
            </div>
            <a class="btn btn-primary" href="{{ route('memberships.index') }}">Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>

<!-- Script untuk mengatur format mata uang IDR -->
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
