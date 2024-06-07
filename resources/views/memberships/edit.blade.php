@extends('admin.master')

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
                    <form action="{{ route('memberships.update', $memberships->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="member_id">Member:</label>
                                    <select class="form-control" name="member_id" required>
                                        @foreach ($members as $member)
                                            <option value="{{ $member->id }}"
                                                {{ $memberships->member_id == $member->id ? 'selected' : '' }}>
                                                {{ $member->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="package_id">Package:</label>
                                    <select class="form-control" name="package_id" required>
                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}"
                                                {{ $memberships->package_id == $package->id ? 'selected' : '' }}>
                                                {{ $package->packet_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="trainer_id">Trainer:</label>
                                    <select class="form-control" name="trainer_id" required>
                                        @foreach ($trainers as $trainer)
                                            <option value="{{ $trainer->id }}"
                                                {{ $memberships->trainer_id == $trainer->id ? 'selected' : '' }}>
                                                {{ $trainer->trainer_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Start Date:</strong>
                                    <input type="date" name="startdate" value="{{ $memberships->startdate }}"
                                        class="form-control" placeholder="Duration (in days)">
                                </div>
                            
                            <a class="btn btn-primary" href="{{ route('trainers.index') }}">Back</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
