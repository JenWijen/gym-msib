@extends('admin.index')

@section('content')
<div class="container">
    <h1>Trainer Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>Name:</th>
            <td>{{ $trainer->trainer_name }}</td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td>{{ $trainer->gender }}</td>
        </tr>
        <tr>
            <th>Contact:</th>
            <td>{{ $trainer->contact }}</td>
        </tr>
    </table>
    <a class="btn btn-primary" href="{{ route('trainers.index') }}">Back</a>
</div>
@endsection
