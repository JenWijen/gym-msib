@extends('admin.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">
        <div class="stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Rental Information</h4>
                    <p class="card-description">
                        Rental Details
                    </p>
                    <table class="table table-bordered">
                        <tr>
                            <th>Court Name:</th>
                            <td>{{ $npackage->field_name }}</td>
                        </tr>
                        <tr>
                            <th>Picture:</th>
                            <td>
                                @if ($npackage->field_picture)
                                    <img src="{{ asset('path/to/images/' . $npackage->field_picture) }}" alt="{{ $npackage->field_name }}" style="max-width: 200px;">
                                @else
                                    No Picture Available
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Price:</th>
                            <td>{{ $npackage->field_price }}</td>
                        </tr>
                    </table><br>
                    <a class="btn btn-primary" href="{{ route('non_package.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
