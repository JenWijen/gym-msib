@extends('user.ulayout')

@section('content')
<div class="content-wrapper pt-5 pb-3">
<div class="container-fluid pt-5 pb-3">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rental Form</h4>
                <p class="card-description">Adding New Package</p>
                <form class="forms-sample" action="{{ route('storeRent') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="user_id">Name:</label>
                        <input type="text" value="{{ Auth::user()->name }}" readonly class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="rent_package_id">Name Package:</label>
                        <select class="form-control" id="rent_package_id" name="rent_package_id" required>
                            @foreach ($rpackages as $rpackage)
                                <option value="{{ $rpackage->id }}">{{ $rpackage->field_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="rent_hours">Rental Hours:</label>
                        <input type="number" class="form-control" id="rent_hours" name="rent_hours" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="startdate">Date:</label>
                        <input type="date" class="form-control" id="startdate" name="startdate" required>
                    </div>
                    <a class="btn btn-primary mt-3" href="{{ route('staff_rent_book.index') }}">Back</a>
                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection