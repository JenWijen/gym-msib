
@extends('admin.master')

@section('content')

<div class="container-fluid">
  <div class="stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Package Form</h4>
        <p class="card-description">
          Adding New Package
        </p>
        <form class="forms-sample" action="{{ route('non_package.store') }}" method="POST">
          @csrf
          <div class="form-group">
              <label for="package_name">Package Name:</label>
              <input type="text" class="form-control" name="package_name" required>
          </div>
          <div class="form-group">
              <label for="price">Price:</label>
              <input type="text" class="form-control" id="IDR" name="price" required>
          </div>
          <div class="form-group">
              <label for="duration">Duration:</label>
              <input type="number" class="form-control" name="duration" required>
          </div>

          <a class="btn btn-primary" href="{{ route('non_package.index') }}">Back</a>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
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
