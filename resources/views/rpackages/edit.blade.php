@extends('admin.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">
        <div class="stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Rental Package Form</h4>
                    <p class="card-description">
                        Edit Rental Package Information
                    </p>
                    <form action="{{ route('rent_package.update', $rpackages->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Court Name:</strong>
                                    <input type="text" name="field_name" value="{{ $rpackages->field_name }}"
                                        class="form-control" placeholder="field_Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Picture:</strong>
                                    <input type="file" name="field_picture" class="form-control">
                                    @if ($rpackages->field_picture)
                                        <img src="{{ asset('path/to/images/' . $rpackages->field_picture) }}"
                                            alt="{{ $rpackages->field_name }}" style="max-width: 200px; margin-top: 10px;">
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Price:</strong>
                                    <input type="text" step="0.01" name="field_price"
                                        value="{{ $rpackages->field_price }}" class="form-control" id="IDR"
                                        placeholder="Price">
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-primary" href="{{ route('rent_package.index') }}">Back</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('IDR').addEventListener('keyup', function(e) {
                let cursorPosition = this.selectionStart;
                let value = parseInt(this.value.replace(/[^,\d]/g, ''));
                let originalLength = this.value.length;
                if (isNaN(value)) {
                    this.value = "";
                } else {
                    this.value = value.toLocaleString('id-ID', {
                        minimumFractionDigits: 0,
                        maximumFractionDigits: 0
                    }).replace(/\./g, '.');
                    cursorPosition = this.value.length - originalLength + cursorPosition;
                    this.setSelectionRange(cursorPosition, cursorPosition);
                }
            });
        });
    </script>
@endsection
