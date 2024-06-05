@extends('admin.master')

@section('content')

    <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Package list</p>
        <a href="{{ route('packages.create') }}" class="btn btn-primary mb-3">Add Package</a>
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

                @foreach ($packages as $package)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $package->packet_name }}</td>
                    <td>{{ formatRupiah($package->price) }}</td>
                    <td>{{ $package->duration }}</td>

                    <td>
                        <form action="{{ route('packages.destroy', $package->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('packages.show', $package->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('packages.edit', $package->id) }}">Edit</a>
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
