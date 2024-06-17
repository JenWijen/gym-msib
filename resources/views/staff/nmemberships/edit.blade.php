@extends('staff.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">
        <div class="stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Membership + Trainer Form</h4>
                    <p class="card-description">
                        Edit Membership + Trainer Information
                    </p>
                    <form action="{{ route('staff_non_membership.update', $nmemberships->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="user_id">User Name:</label>
                                    <select class="form-control" id="user_id" name="user_id" required>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" {{ $user->id == $nmemberships->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="non_trainer_package_id">Package:</label>
                                    <select class="form-control" name="non_trainer_package_id" required>
                                        @foreach ($npackages as $npackage)
                                            <option value="{{ $npackage->id }}"
                                                {{ $nmemberships->non_trainer_package_id == $npackage->id ? 'selected' : '' }}>
                                                {{ $npackage->package_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Start Date:</strong>
                                    <input type="date" name="startdate" value="{{ $nmemberships->startdate }}"
                                        class="form-control" placeholder="Duration (in days)">
                                </div>
                            
                            <a class="btn btn-primary" href="{{ route('staff_non_membership.index') }}">Back</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
