@extends('admin.index')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header bg-white">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Trainer Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Admin</a></li>
            <li class="breadcrumb-item active">Trainers</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<div class="container">
    <h1 class="mt-5">Trainer List</h1>
    <a href="{{ route('trainers.create') }}" class="btn btn-primary mb-3">Add Trainer</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered bg-white">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Contact</th>
            <th width="280px">Action</th>
        </tr>
        @php $i = 0; @endphp
        @foreach ($trainers as $trainer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $trainer->trainer_name }}</td>
            <td>{{ $trainer->gender }}</td>
            <td>{{ $trainer->contact }}</td>
            <td>
                <form action="{{ route('trainers.destroy', $trainer->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('trainers.show', $trainer->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('trainers.edit', $trainer->id) }}">Edit</a>
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
