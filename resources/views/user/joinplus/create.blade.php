@extends('user.ulayout')

@section('content')
<div class="content-wrapper pt-5 pb-3">
<div class="container-fluid pt-5 pb-3">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Membership Form</h4>
                <p class="card-description">Adding new membership</p>
                <form class="forms-sample" action="{{ route('storeJoinplus') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="user_id">Name:</label>
                        <input type="text" value="{{ Auth::user()->name }}" readonly class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="package_id">Package:</label>
                        <select class="form-control" name="package_id" required>
                          <option value="" disabled selected>Choose what you want!</option>
                          @foreach ($packages as $package)
                            <option value="{{ $package->id }}">{{ $package->package_name }}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="trainer_id">Trainer:</label>
                        <select class="form-control" name="trainer_id" required>
                          <option value="" disabled selected>choose your trainer!</option>
                          @foreach ($trainers as $trainer)
                            <option value="{{ $trainer->id }}">{{ $trainer->trainer_name }}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="startdate">Start Date:</label>
                        <input type="date" class="form-control" name="startdate" required>
                    </div>
                    <a class="btn btn-primary mt-3" href="{{ route('user.master') }}">Back</a>
                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection