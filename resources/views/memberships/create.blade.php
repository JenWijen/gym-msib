@extends('admin.index')

@section('content')
<div class="container">
    <h1>Add Membership</h1>
    <form action="{{ route('memberships.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="packet_name">Packet Name:</label>
            <input type="text" class="form-control" name="packet_name">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" name="duration">
        </div>
        <div class="form-group">
            <label for="trainer_id">Trainer:</label>
            <select class="form-control" name="trainer_id">
                @foreach ($trainers as $trainer)
                <option value="{{ $trainer->id }}">{{ $trainer->trainer_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection