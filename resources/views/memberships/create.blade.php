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
            <label for="member_id">Member:</label>
            <select class="form-control" name="member_id" required>
              <option value="" disabled selected>Silakan pilih member</option>
              @foreach ($members as $member)
                <option value="{{ $member->id }}">{{ $member->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="package_id">Package:</label>
            <select class="form-control" name="package_id" required>
              <option value="" disabled selected>Silakan pilih package</option>
              @foreach ($packages as $package)
                <option value="{{ $package->id }}">{{ $package->packet_name }}</option>
              @endforeach
            </select>
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
