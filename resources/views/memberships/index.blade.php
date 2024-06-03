@extends('admin.index')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-white">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Membership Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Admin</a></li>
              <li class="breadcrumb-item active">Memberships</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 class="mt-5">Membership List</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary mb-3" href="{{ route('memberships.create') }}"> Create New Membership</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered bg-white">
            <tr>
                <th>No</th>
                <th>Packet Name</th>
                <th>Price</th>
                <th>Duration</th>
                <th>Trainer ID</th>
                <th width="280px">Action</th>
            </tr>
             @php $i = 0; @endphp
            @foreach ($memberships as $membership)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $membership->packet_name }}</td>
                <td>{{ formatRupiah($membership->price) }}</td>
                <td>{{ $membership->duration }}</td>
                <td>{{ $membership->trainer_id }}</td>
                <td>
                    <form action="{{ route('memberships.destroy', $membership->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('memberships.show', $membership->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('memberships.edit', $membership->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
