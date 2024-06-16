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
                                <label for="member_id">Member:</label>
                                <select class="form-control" name="member_id" required>
                                    @foreach ($members as $member)
                                        <option value="{{ $member->id }}" {{ $nmembership->member_id == $member->id ? 'selected' : '' }}>
                                            {{ $member->name }}
                                        </option>
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
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
