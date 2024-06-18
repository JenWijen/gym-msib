@extends('user.ulayout')

@section('content')
<div class="content-wrapper pt-5 pb-3">
<div class="container-fluid pt-5 pb-3">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Membership Form</h4>
                <p class="card-description">Adding new membership</p>
                <form class="forms-sample" action="{{ route('storeJoinmin') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="user_id">Name:</label>
                        <input type="text" value="{{ Auth::user()->name }}" readonly class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="non_trainer_package_id">Package:</label>
                        <select class="form-control" name="non_trainer_package_id" required>
                          <option value="" disabled selected>Choose what you want!</option>
                          @foreach ($npackages as $npackage)
                            <option value="{{ $npackage->id }}">{{ $npackage->package_name }}</option>
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