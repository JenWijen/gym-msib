@extends('admin.index')

@section('content')
<div class="container">
    <h1>Edit Trainer</h1>
    <form action="{{ route('trainers.update', $trainer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="trainer_name">Name:</label>
            <input type="text" class="form-control" name="trainer_name" value="{{ $trainer->trainer_name }}">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" name="gender">
                <option value="L" {{ $trainer->gender == 'L' ? 'selected' : '' }}>Male</option>
                <option value="P" {{ $trainer->gender == 'P' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" name="contact" value="{{ $trainer->contact }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
