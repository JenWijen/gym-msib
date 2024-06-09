@extends('admin.master')

@section('content')

    <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Non-Trainer Package list</p>
        <a href="{{ route('npackages.create') }}" class="btn btn-primary mb-3">Add Package</a>
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
                    <th>Package Name</th>
                    <th>Price</th>
                    <th>Duration</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>
                <tbody>
                     @php $i = 0; @endphp

                @foreach ($npackages as $npackage)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $npackage->package_name }}</td>
                    <td>{{ formatRupiah($npackage->price) }}</td>
                    <td>{{ $npackage->duration }}</td>

                    <td>
                        <form action="{{ route('npackages.destroy', $npackage->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('npackages.show', $npackage->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('npackages.edit', $npackage->id) }}">Edit</a>
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
