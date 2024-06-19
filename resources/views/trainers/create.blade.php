@extends('admin.master')

@section('content')

<div class="container-fluid">
  <div class="stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Trainer Form</h4>
        <p class="card-description">
          Adding new trainer
        </p>
        <form class="forms-sample" action="{{ route('trainers.store') }}" method="POST">
          @csrf
          <div class="form-group">
              <label for="trainer_name">Name:</label>
              <input type="text" class="form-control" name="trainer_name">
          </div>
          <div class="form-group">
              <label for="gender">Gender:</label>
              <select class="form-control" name="gender" placeholder="Your gender">
                <option value="" disabled selected hidden>Choose Gender...</option>
                <option value="L">Male</option>
                <option value="P">Female</option>
              </select>
          </div>
          <div class="form-group">
              <label for="contact">Contact:</label>
              <input type="text" class="form-control" name="contact">
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <textarea class="form-control" name="address" rows="4"></textarea>
          </div>

          <a class="btn btn-primary" href="{{ route('trainers.index') }}">Back</a>
          <button type="submit" class="btn btn-success alerts">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Include jQuery if not already included -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include SweetAlert JS from local directory -->
<script src="{{ asset('adminskydash/vendor/sweetalert/sweetalert.min.js') }}"></script>

@endsection
