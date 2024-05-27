<!-- resources/views/admin/trainers/create.blade.php -->

@extends('admin.index')

@section('content')
<div class="container">
    <h1>Add Member</h1>
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" name="contact" required>
        </div>
        <div class="form-group">
            <label for="membership_id">Membership:</label>
            <select class="form-control" name="membership_id" required>
                @foreach($memberships as $membership)
                    <option value="{{ $membership->id }}">{{ $membership->name }}</option>
                    <option value="{{ $trainer->id }}">{{ $trainer->trainer_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
