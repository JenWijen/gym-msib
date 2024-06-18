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
            <label for="user_id">User Name:</label>
            <select class="form-control" id="user_id" name="user_id" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="package_id">Package:</label>
            <select class="form-control" name="package_id" required>
              <option value="" disabled selected>Choose what you want!</option>>
              @foreach ($packages as $package)
                <option value="{{ $package->id }}">{{ $package->package_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="trainer_id">Trainer:</label>
            <select class="form-control" name="trainer_id" required>
              <option value="" disabled selected>choose your trainer!</option>
              @foreach ($trainers as $trainer)
                <option value="{{ $trainer->id }}">{{ $trainer->trainer_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="startdate">Start Date:</label>
            <input type="date" class="form-control" name="startdate" required>
          </div>
          <a class="btn btn-primary" href="{{ route('memberships.index') }}">Back</a>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
