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
                            <th>Field Name:</th>
                            <td>{{ $rpackages->field_name }}</td>
                        </tr>
                        <tr>
                            <th>Picture:</th>
                            <td>
                                @if ($rpackages->field_picture)
                                    <img src="{{ asset($rpackages->field_picture) }}" alt="{{ $rpackages->field_name }}" style="width: 100%; max-width: 600px; height: auto; border-radius: 0;">
                                @else
                                    No Picture Available
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Price:</th>
                            <td>Rp.{{ $rpackages->field_price }} /hour</td>
                        </tr>
                    </table><br>
                    <a class="btn btn-primary" href="{{ route('rent_package.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
