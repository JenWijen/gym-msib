@extends('staff.master')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <p class="card-title">List Membership</p>
        <a href="{{ route('with_trainer.create') }}" class="btn btn-primary mb-3">Create New Membership</a>
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
                        <th>Member Name</th>
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
                        <td>{{ $membership->member->name }}</td>
                        <td>{{ $membership->package->package_name }}</td>
                        <td>{{ $membership->trainer->trainer_name }}</td>
                        <td>{{ \Carbon\Carbon::parse($membership->startdate)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
                        <td>
                            <form action="{{ route('memberships.destroy', $membership->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('with_trainer.show', $membership->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('with_trainer.edit', $membership->id) }}">Edit</a>
                                @csrf
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
