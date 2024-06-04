@extends('admin.master')

@section('content')

<div class="container-fluid">
  <div class="stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Trainer Form</h4>
        <p class="card-description">
          Edit trainer information
        </p>
        <form class="forms-sample" action="{{ route('trainers.update', $trainer->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="trainer_name">Name:</label>
              <input type="text" class="form-control" name="trainer_name" value="{{ $trainer->trainer_name }}">
          </div>
          <div class="form-group">
              <label for="gender">Gender:</label>
              <select class="form-control" name="gender" placeholder="Your gender">
                <option value="L" {{ $trainer->gender == 'L' ? 'selected' : '' }}>Male</option>
                <option value="P" {{ $trainer->gender == 'P' ? 'selected' : '' }}>Female</option>
              </select>
          </div>
          <div class="form-group">
              <label for="contact">Contact:</label>
              <input type="text" class="form-control" name="contact" value="{{ $trainer->contact }}">
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <textarea class="form-control" name="address" rows="4" value="{{ $trainer->address }}" ></textarea>
          </div>

          <a class="btn btn-primary" href="{{ route('trainers.index') }}">Back</a>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
