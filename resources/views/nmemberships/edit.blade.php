@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Membership + Trainer Form</h4>
                <p class="card-description">Edit Membership + Trainer Information</p>
                <form action="{{ route('non_membership.update', $nmembership->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="user_id">User Name:</label>
                                <select class="form-control" id="user_id" name="user_id" required>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ $user->id == $memberships->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="non_trainer_package_id">Package:</label>
                                <select class="form-control" name="non_trainer_package_id" required>
                                    @foreach ($npackages as $npackage)
                                        <option value="{{ $npackage->id }}" {{ $nmembership->non_trainer_package_id == $npackage->id ? 'selected' : '' }}>
                                            {{ $npackage->package_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="startdate">Start Date:</label>
                                <input type="date" name="startdate" value="{{ $nmembership->startdate }}" class="form-control">
                            </div>
                        </div>
                        <a class="btn btn-primary" href="{{ route('non_membership.index') }}">Back</a>
                        <button type="submit" class="btn btn-success alerts">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('adminskydash/vendor/sweetalert/sweetalert.min.js') }}"></script>
@endsection
