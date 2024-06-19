@extends('admin.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">
        <div class="stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Package Form</h4>
                    <p class="card-description">
                        Edit Package Information
                    </p>
                    <form action="{{ route('packages.update', $package->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Packet Name:</strong>
                                    <input type="text" name="package_name" value="{{ $package->package_name }}"
                                        class="form-control" placeholder="Package Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Price:</strong>
                                    <input type="text" name="price" value="{{ number_format($package->price, 0, ',', '.') }}"
                                        class="form-control" id="IDR" placeholder="Price">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Duration:</strong>
                                    <input type="number" name="duration" value="{{ $package->duration }}"
                                        class="form-control" placeholder="Duration (in days)">
                                 </div>
                            </div>
                        </div>

                        <a class="btn btn-primary" href="{{ route('packages.index') }}">Back</a>
                        <button type="submit" class="btn btn-success alerts">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('IDR').addEventListener('keyup', function(e) {
                let cursorPosition = this.selectionStart;
                let value = this.value.replace(/[^0-9]/g, '');
                let originalLength = this.value.length;
                if (isNaN(value)) {
                    this.value = "";
                } else {
                    this.value = parseInt(value).toLocaleString('id-ID').replace(/,/g, '.');
                    cursorPosition = this.value.length - originalLength + cursorPosition;
                    this.setSelectionRange(cursorPosition, cursorPosition);
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('adminskydash/vendor/sweetalert/sweetalert.min.js') }}"></script>
@endsection
