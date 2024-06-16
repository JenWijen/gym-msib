@extends('staff.master')

@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Member list</p>
        <a href="{{ route('memb_only.create') }}" class="btn btn-primary mb-3">Add Member</a>
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
                    <th>Name</th>
                    <th>Contact</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($members as $member)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->contact }}</td>
                    <td>
                        <form action="{{ route('memb_only.destroy', $member->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('memb_only.show', $member->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('memb_only.edit', $member->id) }}">Edit</a>
        
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
