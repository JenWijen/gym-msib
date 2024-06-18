@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <p class="card-title">Rental Package list</p>
            <a href="{{ route('rent_package.create') }}" class="btn btn-primary mb-3">Add Package</a>
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
                                    <th>Field Name</th>
                                    <th>Picture</th>
                                    <th>Price</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach ($rpackages as $rpackage)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $rpackage->field_name }}</td>
                                        <td>
                                            @if ($rpackage->field_picture)
                                                 <img src="{{ asset($rpackage->field_picture) }}" alt="{{ $rpackage->field_name }}" style="width: 100px; height: auto;">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td>{{ formatRupiah($rpackage->field_price) }}</td>
                                        <td>
                                            <form action="{{ route('rent_package.destroy', $rpackage->id) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('rent_package.show', $rpackage->id) }}">Show</a>
                                                <a class="btn btn-primary" href="{{ route('rent_package.edit', $rpackage->id) }}">Edit</a>
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
