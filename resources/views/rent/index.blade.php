@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <p class="card-title">Rental list</p>
            <a href="{{ route('rent_book.create') }}" class="btn btn-primary mb-3">Add list</a>
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
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Field Name</th>
                                    <th>Rental Hours</th>
                                    <th>Start Date</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach ($rental as $rent)
                                    @if ($rent->user && $rent->rpackage)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $rent->user->name }}</td>
                                            <td>{{ $rent->rpackage->field_name }}</td>
                                            <td>{{ $rent->rent_hours }} Hours</td>
                                            <td>{{ \Carbon\Carbon::parse($rent->startdate)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
                                            <td>
                                                <form action="{{ route('rent_book.destroy', $rent->id) }}" method="POST">
                                                    <a class="btn btn-info" href="{{ route('rent_book.show', $rent->id) }}">Show</a>
                                                    <a class="btn btn-primary" href="{{ route('rent_book.edit', $rent->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td colspan="5">Incomplete rental information for rental ID: {{ $rent->id }}</td>
                                        </tr>
                                    @endif
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
