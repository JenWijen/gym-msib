@extends('admin.master')

@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Rental Package list</p>
                <a href="{{ route('non_package.create') }}" class="btn btn-primary mb-3">Add Package</a>
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
                                        <th>Court Name</th>
                                        <th>Picture</th>
                                        <th>Price</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 0; @endphp

                                    @foreach ($npackages as $npackage)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $npackage->field_name }}</td>
                                            <td>
                                                <img src="{{ asset('path/to/images/' . $npackage->field_picture) }}" alt="{{ $npackage->field_name }}" style="width: 100px; height: auto;">
                                            </td>
                                            <td>{{ formatRupiah($npackage->field_price) }}</td>
                                            <td>
                                                <form action="{{ route('non_package.destroy', $npackage->id) }}" method="POST">
                                                    <a class="btn btn-info" href="{{ route('non_package.show', $npackage->id) }}">Show</a>
                                                    <a class="btn btn-primary" href="{{ route('non_package.edit', $npackage->id) }}">Edit</a>
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
