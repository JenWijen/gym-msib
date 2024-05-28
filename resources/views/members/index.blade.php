@extends('admin.index')

@section('content')
<div class="container">
    <h1>Members</h1>
    <a href="{{ route('members.create') }}" class="btn btn-primary mb-3">Add Member</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Membership</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($members as $member)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $member->name }}</td>
            <td>{{ $member->contact }}</td>
            <td>{{ $member->membership->packet_name }}</td>
            <td>
                <form action="{{ route('members.destroy', $member->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('members.show', $member->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('members.edit', $member->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
