<!-- resources/views/admin/trainers/create.blade.php -->

@extends('staff.master')

@section('content')

<div class="container-fluid">
  <div class="stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Member Form</h4>
        <p class="card-description">
          Adding new member
        </p>
        <form class="forms-sample" action="{{ route('memb_only.store') }}" method="POST">
          @csrf
          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" required>
          </div>
          <div class="form-group">
              <label for="contact">Contact:</label>
              <input type="text" class="form-control" name="contact" required>
          </div>

          <a class="btn btn-primary" href="{{ route('memb_only.index') }}">Back</a>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
