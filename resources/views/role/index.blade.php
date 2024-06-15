@extends('admin.master')

@section('content')

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <p class="card-title">Users list</p>
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
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
              <tbody>
                   @php $i = 0; @endphp
                   @foreach ($users as $user)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->userType }}</td>
                    <td>
                        <form action="{{ route('roles.updateType', $user->id) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <label>
                                <input type="radio" name="userType" value="admin" {{ $user->userType == 'admin' ? 'checked' : '' }}>
                                Admin
                            </label>
                            <label>
                                <input type="radio" name="userType" value="staff" {{ $user->userType == 'staff' ? 'checked' : '' }}>
                                Staff
                            </label>
                            <label>
                                <input type="radio" name="userType" value="user" {{ $user->userType == 'user' ? 'checked' : '' }}>
                                User
                            </label>

                            <button class="btn btn-primary" type="submit">Update</button>
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