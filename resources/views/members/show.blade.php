@extends('admin.index')

@section('content')
<div class="container">
    <h1>Member Details</h1>
    <div class="form-group">
        <label>Name:</label>
        <p>{{ $member->name }}</p>
    </div>
    <div class="form-group">
        <label>Contact:</label>
        <p>{{ $member->contact }}</p>
    </div>
    <div class="form-group">
        <label>Membership:</label>
        <p>{{ $member->membership->packet_name }}</p>
    </div>
    <a class="btn btn-primary" href="{{ route('members.index') }}">Back</a>
</div>
@endsection

