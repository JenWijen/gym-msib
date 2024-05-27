@extends('admin.index')

@section('content')
<div class="container">
    <h1>Add Trainer</h1>
    <form action="{{ route('trainers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="trainer_name">Name:</label>
            <input type="text" class="form-control" name="trainer_name">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" name="gender">
                <option value="L">Male</option>
                <option value="P">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" name="contact">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
