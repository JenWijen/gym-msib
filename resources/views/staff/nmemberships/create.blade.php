<!-- resources/views/admin/memberships/create.blade.php -->

@extends('staff.master')

@section('content')

<div class="container-fluid">
  <div class="stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Non Trainer Membership Form</h4>
        <p class="card-description">
          Adding new membership
        </p>
        <form class="forms-sample" action="{{ route('staff_non_membership.store') }}" method="POST">
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
            <label for="non_trainer_package_id">Package:</label>
            <select class="form-control" name="non_trainer_package_id" required>
              <option value="" disabled selected>Silakan pilih package</option>
              @foreach ($npackages as $npackage)
                <option value="{{ $npackage->id }}">{{ $npackage->package_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="startdate">Start Date:</label>
            <input type="date" class="form-control" name="startdate" required>
          </div>
          <a class="btn btn-primary" href="{{ route('staff_non_membership.index') }}">Back</a>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
