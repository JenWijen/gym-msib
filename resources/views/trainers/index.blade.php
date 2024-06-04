@extends('admin.master')

@section('content')

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <p class="card-title">Trainer list</p>
      <a href="{{ route('trainers.create') }}" class="btn btn-primary mb-3">Add Trainer</a>
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
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th width="280px">Action</th>
                  </tr>
              </thead>
              <tbody>
                   @php $i = 0; @endphp
                   @foreach ($trainers as $trainer)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $trainer->trainer_name }}</td>
                    <td>{{ $trainer->gender }}</td>
                    <td>{{ $trainer->contact }}</td>
                    <td>{{ $trainer->address }}</td>
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
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

