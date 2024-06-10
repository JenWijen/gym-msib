@extends('admin.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">
        <div class="stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Members Information</h4>
                    <p class="card-description">
                        Members Details
                    </p>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name:</th>
                            <td>{{ $member->name }}</td>
                        </tr>
                        <tr>
                            <th>Contact:</th>
                            <td>{{ $member->contact }}</td>
                        </tr>
                    </table><br>
                    <a class="btn btn-primary" href="{{ route('member_list.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
