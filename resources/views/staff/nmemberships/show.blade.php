@extends('staff.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">
        <div class="stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Membership Information</h4>
                    <p class="card-description">
                        Membership Details
                    </p>
                    <table class="table table-bordered">
                        <tr>
                            <th>Packet Name:</th>
                            <td>{{ $nmembership->member->name }}</td>

                        </tr>
                        <tr>
                            <th>Package:</th>
                            <td>{{ $nmembership->package->package_name }}</td>

                        </tr>
                        <tr>
                            <th>Start Date:</th>
                            <td>{{ $nmembership->startdate }}</td>

                        </tr>
                    </table><br>
                    <a class="btn btn-primary" href="{{ route('staff_non_membership.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
