@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <p class="card-title">list Membership</p>
        <a href="{{ route('nmemberships.create') }}" class="btn btn-primary mb-3"> Create New Membership</a>
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
                        <th>Start Date</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                     @php $i = 0; @endphp
                    @foreach ($nmemberships as $nmembership)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $nmembership->member->name }}</td>
                        <td>{{ $nmembership->package->package_name }}</td>
                        <td>{{ $nmembership->startdate }}</td>
                        <td>
                            <form action="{{ route('nmemberships.destroy', $nmembership->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('nmemberships.show', $nmembership->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('nmemberships.edit', $nmembership->id) }}">Edit</a>
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
