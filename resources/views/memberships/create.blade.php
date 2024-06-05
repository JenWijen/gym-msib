<!-- resources/views/admin/memberships/create.blade.php -->

@extends('admin.master')

@section('content')

<div class="container-fluid">
  <div class="stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Membership Form</h4>
        <p class="card-description">
          Adding new membership
        </p>
        <form class="forms-sample" action="{{ route('memberships.store') }}" method="POST">
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
              <option value="" disabled selected>Silakan pilih trainer</option>
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
