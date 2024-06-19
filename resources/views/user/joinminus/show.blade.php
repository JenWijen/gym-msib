@extends('user.ulayout')

@section('content')
<div class="content-wrapper pt-5 pb-3">
    <div class="container-fluid pt-5 pb-3">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title text-center mb-4">Rental Details</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Package Name:</label>
                            <input type="text" class="form-control" value="{{ $package->field_name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Rental Hours:</label>
                            <input type="text" class="form-control" value="{{ $rental->rent_hours }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Date:</label>
                            <input type="text" class="form-control" value="{{ $rental->startdate }}" readonly>
                        </div>
                        <a class="btn btn-primary mt-3" href="{{ route('user.rent.index') }}">Back</a>
                    </div>
                    <div class="col-md-6">
                        @if ($package->field_picture)
                            <img src="{{ asset($package->field_picture) }}" alt="{{ $package->field_name }}" class="img-fluid rounded">
                        @else
                            <span>No Image</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card p-3">
                <div class="card-body border p-0">
                    <p>
                        <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between"
                            data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                            aria-controls="collapseExample">
                            <span class="fw-bold">PayPal</span>
                            <span class="fab fa-cc-paypal">
                            </span>
                        </a>
                    </p>
                    <div class="collapse p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-8">
                                <p class="h4 mb-0">Summary</p>
                                <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of
                                        product</span></p>
                                <p class="mb-0"><span class="fw-bold">Price:</span><span
                                        class="c-green">:$452.90</span></p>
                                <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                    nihil neque
                                    quisquam aut
                                    repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                    quis,
                                    iste harum ipsum hic, nemo qui!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border p-0">
                    <p>
                        <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                            data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                            aria-controls="collapseExample">
                            <span class="fw-bold">Credit Card</span>
                            <span class="">
                                <span class="fab fa-cc-amex"></span>
                                <span class="fab fa-cc-mastercard"></span>
                                <span class="fab fa-cc-discover"></span>
                            </span>
                        </a>
                    </p>
                    <div class="collapse show p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Summary</p>
                                <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of
                                        product</span>
                                </p>
                                <p class="mb-0">
                                    <span class="fw-bold">Price:</span>
                                    <span class="c-green">:$452.90</span>
                                </p>
                                <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                    nihil neque
                                    quisquam aut
                                    repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                    quis,
                                    iste harum ipsum hic, nemo qui!</p>
                            </div>
                            <div class="col-lg-7">
                                <form action="" class="form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" ">
                                                <label for="" class="form__label">Card Number</label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" ">
                                                <label for="" class="form__label">MM / yy</label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form__div">
                                                <input type="password" class="form-control" placeholder=" ">
                                                <label for="" class="form__label">cvv code</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" ">
                                                <label for="" class="form__label">name on the card</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn btn-primary w-100">Sumbit</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="btn btn-primary payment">
                Make Payment
            </div>
        </div>
    </div>
</div>
@endsection
