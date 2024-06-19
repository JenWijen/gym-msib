@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Rental Package Form</h4>
            <p class="card-description">Adding New Package</p>
            <form class="forms-sample" action="{{ route('rent_package.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="field_name">Field Name:</label>
                    <input type="text" class="form-control" id="field_name" name="field_name" required>
                </div>
                <div class="form-group">
                    <label for="field_picture">Picture:</label>
                    <input type="file" class="form-control-file" id="field_picture" name="field_picture" required>
                </div>
                <div class="form-group">
                    <label for="field_price">Price:</label>
                    <input type="text" class="form-control" id="IDR" name="field_price" required>
                </div>

                <a class="btn btn-primary" href="{{ route('rent_package.index') }}">Back</a>
                <button type="submit" class="btn btn-success alerts">Submit</button>
            </form>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('adminskydash/vendor/sweetalert/sweetalert.min.js') }}"></script>
@endsection
