<!-- resources/views/admin/trainers/edit.blade.php -->

@extends('admin.index')

@section('content')
<div class="container">
    <h1>Edit Member</h1>
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ $member->name }}" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" name="contact" value="{{ $member->contact }}" required>
        </div>
        <div class="form-group">
            <label for="membership_id">Membership:</label>
            <select class="form-control" name="membership_id" required>
                @foreach($memberships as $membership)
                    <option value="{{ $membership->id }}" {{ $member->membership_id == $membership->id ? 'selected' : '' }}>
                        {{ $membership->packet_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
