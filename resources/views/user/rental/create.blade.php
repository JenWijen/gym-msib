@extends('user.ulayout')

@section('content')
<div class="content-wrapper pt-5 pb-3">
<div class="container-fluid pt-5 pb-3">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rental Form</h4>
                <p class="card-description">Adding New Package</p>
                <form class="forms-sample" action="{{ route('storeRent') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="user_id">Name:</label>
                        <input type="text" value="{{ Auth::user()->name }}" readonly class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="rent_package_id">Name Package:</label>
                        <select class="form-control" id="rent_package_id" name="rent_package_id" required>
                            @foreach ($rpackages as $rpackage)
                                <option value="{{ $rpackage->id }}">{{ $rpackage->field_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="rent_hours">Rental Hours:</label>
                        <input type="number" class="form-control" id="rent_hours" name="rent_hours" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="startdate">Date:</label>
                        <input type="date" class="form-control" id="startdate" name="startdate" required>
                    </div>
                    <a class="btn btn-primary mt-3" href="{{ route('user.master') }}">Back</a>
                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please proceed to the payment.</p>
                <!-- Add your payment form or information here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Pay Now</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showPaymentModal(event) {
        event.preventDefault();
        // Assuming form submission is successful, show the modal
        $('#paymentModal').modal('show');
        // Optionally, you can submit the form via AJAX here
        // If you use AJAX, submit the form data and then show the modal on success
    }
</script>
@endsection