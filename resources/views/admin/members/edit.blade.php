<!-- resources/views/admin/trainers/edit.blade.php -->

@extends('admin.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">
        <div class="stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Trainer Form</h4>
                    <p class="card-description">
                        Edit trainer information
                    </p>
                    <form action="{{ route('member_list.update', $member->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ $member->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact:</label>
                            <input type="text" class="form-control" name="contact" value="{{ $member->contact }}"
                                required>
                        </div>
                        <a class="btn btn-primary" href="{{ route('member_list.index') }}">Back</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
