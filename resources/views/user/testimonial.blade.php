@extends('homepage.layouts.main')

@section('content')
<div class="container-xxl py-5 bg-primary hero mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Testimonial</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <!-- <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                        <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="card-body px-0">
    @foreach ($testimoni as $testimoni)
    <div class="testimonial-item bg-transparent border rounded text-dark p-4">
        <i class="fa fa-quote-left fa-2x mb-3"></i>
        <p>{{ $testimoni->comment }}</p>
        <div class="d-flex align-items-center">
            @if ($testimoni->user->image)
                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('storage/'.$testimoni->user->image) }}" style="width: 50px; height: 50px;">
            @elseif ($testimoni->user->gender == 'Perempuan')
                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/woman.png') }}" style="width: 50px; height: 50px;">
            @elseif ($testimoni->user->gender == 'Laki-laki')
                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/man.png') }}" style="width: 50px; height: 50px;">
            @else
                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/user.png') }}" style="width: 50px; height: 50px;">
            @endif
            <div class="ps-3">
                <h6 class="text-dark mb-1">{{ $testimoni->user->name }}</h6>
                <small>{{ $testimoni->user->level }}</small>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
</div>

@endsection