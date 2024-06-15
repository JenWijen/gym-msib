@extends('staff.master')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Rental Form</h4>
            <p class="card-description">Adding New Package</p>
            <form class="forms-sample" action="{{ route('staff_rent_book.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="user_id">Name:</label>
                    <select class="form-control" id="user_id" name="user_id" required>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rent_package_id">Name Package:</label>
                    <select class="form-control" id="rent_package_id" name="rent_package_id" required>
                        @foreach ($rpackages as $rpackage)
                            <option value="{{ $rpackage->id }}">{{ $rpackage->field_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rent_hours">Rental Hours:</label>
                    <input type="number" class="form-control" id="rent_hours" name="rent_hours" required>
                </div>
                <div class="form-group">
                    <label for="startdate">Date:</label>
                    <input type="date" class="form-control" id="startdate" name="startdate" required>
                </div>
                <a class="btn btn-primary" href="{{ route('staff_rent_book.index') }}">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
