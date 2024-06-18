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
                    <form action="{{ route('with_trainer.update', $membership->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="user_id">User Name:</label>
                            <select class="form-control" name="user_id" required>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $user->id == $membership->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="package_id">Package:</label>
                            <select class="form-control" name="package_id" required>
                                @foreach ($packages as $package)
                                    <option value="{{ $package->id }}"
                                        {{ $membership->package_id == $package->id ? 'selected' : '' }}>
                                        {{ $package->package_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="trainer_id">Trainer:</label>
                            <select class="form-control" name="trainer_id" required>
                                @foreach ($trainers as $trainer)
                                    <option value="{{ $trainer->id }}"
                                        {{ $membership->trainer_id == $trainer->id ? 'selected' : '' }}>
                                        {{ $trainer->trainer_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="startdate">Start Date:</label>
                            <input type="date" name="startdate" value="{{ $membership->startdate }}"
                                class="form-control" placeholder="Start Date" required>
                        </div>

                        <div class="form-group">
                            <a class="btn btn-primary" href="{{ route('with_trainer.index') }}">Back</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
