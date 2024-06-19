@extends('user.ulayout')

@section('content')
<div class="content-wrapper pt-5 pb-3">
    <div class="container-fluid pt-5 pb-3">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title text-center mb-4">Rental Details</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Package Name:</label>
                            <input type="text" class="form-control" value="{{ $package->field_name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Rental Hours:</label>
                            <input type="text" class="form-control" value="{{ $rental->rent_hours }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Date:</label>
                            <input type="text" class="form-control" value="{{ $rental->startdate }}" readonly>
                        </div>
                        <a class="btn btn-primary mt-3" href="{{ route('user.rent.index') }}">Back</a>
                    </div>
                    <div class="col-md-6">
                        @if ($package->field_picture)
                            <img src="{{ asset($package->field_picture) }}" alt="{{ $package->field_name }}" class="img-fluid rounded">
                        @else
                            <span>No Image</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
