@extends('admin.index')

@section('content')
<div class="container">
    <h1>Trainers</h1>
    <a href="{{ route('trainers.create') }}" class="btn btn-primary mb-3">Add Trainer</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Contact</th>
            <th width="280px">Action</th>
        </tr>
        @php $i = 0; @endphp
        @foreach ($trainers as $trainer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $trainer->trainer_name }}</td>
            <td>{{ $trainer->gender }}</td>
            <td>{{ $trainer->contact }}</td>
            <td>
                <form action="{{ route('trainers.destroy', $trainer->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('trainers.show', $trainer->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('trainers.edit', $trainer->id) }}">Edit</a>
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
