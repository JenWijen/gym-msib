@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Rental Form</h4>
            <p class="card-description">Editing Package Details</p>
            <form class="forms-sample" action="{{ route('rent_book.update', $rental->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="user_id">Name:</label>
                    <select class="form-control" id="user_id" name="user_id" required>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ $user->id == $rental->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rent_package_id">Field Name:</label>
                    <select class="form-control" id="rent_package_id" name="rent_package_id" required>
                        @foreach ($rpackages as $rpackage)
                            <option value="{{ $rpackage->id }}" {{ $rpackage->id == $rental->rent_package_id ? 'selected' : '' }}>{{ $rpackage->field_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rent_hours">Rental Hours:</label>
                    <input type="number" class="form-control" id="rent_hours" name="rent_hours" value="{{ $rental->rent_hours }}" required>
                </div>
                <div class="form-group">
                    <label for="startdate">Date:</label>
                    <input type="date" class="form-control" id="startdate" name="startdate" value="{{ $rental->startdate }}" required>
                </div>
                <a class="btn btn-primary" href="{{ route('rent_book.index') }}">Back</a>
                <button type="submit" class="btn btn-success alerts">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('adminskydash/vendor/sweetalert/sweetalert.min.js') }}"></script>
@endsection