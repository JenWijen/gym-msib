@extends('staff.master')

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
                            <th>Name:</th>
                            <td>{{ $rents->user->name }}</td>
                        </tr>
                        <tr>
                            <th>Field Name:</th>
                            <td>{{ optional($rents->rpackage)->field_name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Rental Hours:</th>
                            <td>{{ $rents->rent_hours }} Hours</td>
                        </tr>
                        <tr>
                            <th>Start Date:</th>
                            <td>{{ \Carbon\Carbon::parse($rent->startdate)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
                        </tr>
                    </table><br>
                    <a class="btn btn-primary" href="{{ route('staff_rent_book.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
