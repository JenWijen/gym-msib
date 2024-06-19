@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <p class="card-title">List Membership</p>
        <a href="{{ route('memberships.create') }}" class="btn btn-primary mb-3">Create New Membership</a>
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
                        <th>User Name</th>
                        <th>Package</th>
                        <th>Trainer Name</th>
                        <th>Start Date</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 0; @endphp
                    @foreach ($memberships as $membership)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $membership->user->name }}</td>
                        <td>{{ $membership->package->package_name }}</td>
                        <td>{{ $membership->trainer->trainer_name }}</td>
                        <td>{{ \Carbon\Carbon::parse($membership->startdate)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
                        <td>
                            <form action="{{ route('memberships.destroy', $membership->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('memberships.show', $membership->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('memberships.edit', $membership->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger warning-message-and-cancel">Delete</button>
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
  <!-- Include jQuery if not already included -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include SweetAlert JS from local directory -->
<script src="{{ asset('adminskydash/vendor/sweetalert/sweetalert.min.js') }}"></script>
@endsection
