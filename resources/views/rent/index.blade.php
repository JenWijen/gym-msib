@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <p class="card-title">Rental Package list</p>
            <a href="{{ route('rent_book.create') }}" class="btn btn-primary mb-3">Add Package</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Package Name</th>
                                    <th>Rental Hours</th>
                                    <th>Date</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rental as $rental)
                                    <tr>
                                        <td>{{ $rental->id }}</td>
                                        <td>{{ $rental->user->name }}</td>
                                        <td>{{ $rental->rentPackage->name }}</td>
                                        <td>{{ $rental->rent_hours }}</td>
                                        <td>{{ $rental->startdate }}</td>
                                        <td>
                                            <form action="{{ route('rent_book.destroy', $rental->id) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('rent_book.show', $rental->id) }}">Show</a>
                                                <a class="btn btn-primary" href="{{ route('rent_book.edit', $rental->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
