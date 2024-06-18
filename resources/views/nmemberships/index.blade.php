@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <p class="card-title">list Membership</p>
        <a href="{{ route('non_membership.create') }}" class="btn btn-primary mb-3"> Create New Membership</a>
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
                        <th>Start Date</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                     @php $i = 0; @endphp
                    @foreach ($nmemberships as $nmembership)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $nmembership->user->name }}</td>
                        <td>{{ $nmembership->package->package_name }}</td>
                        <td>{{ \Carbon\Carbon::parse($nmembership->startdate)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
                        <td>
                            <form action="{{ route('non_membership.destroy', $nmembership->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('non_membership.show', $nmembership->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('non_membership.edit', $nmembership->id) }}">Edit</a>
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
