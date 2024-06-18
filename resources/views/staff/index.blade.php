@extends('staff.master')
@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="row">
      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold"></h3>
        <h6 class="font-weight-normal mb-0"> <span class="text-primary"></span></h6>
      </div>
      
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-5 grid-margin stretch-card">
    <div class="card tale-bg">
      <div class="card-people mt-auto">
        <img src="{{ asset('adminskydash/images/dashboard/people1.jpeg') }}" alt="people">
        <div class="weather-info">
          <div class="d-flex">
            <div>
              <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i><sup></sup></h2>
            </div>
            <div class="ml-2">
              <h4 class="location font-weight-normal"></h4>
              <h6 class="font-weight-normal"></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Total Trainers from Gymfit</p>
              <p class="fs-30 mb-2">{{ App\Models\Trainer::count() }}</p>
              <p>for now</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Total Member with Trainer</p>
              <p class="fs-30 mb-2">{{ App\Models\Membership::count() }}</p>
              <p>for now</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
            <p class="mb-4">Total Member without Trainer</p>
            <p class="fs-30 mb-2">{{ App\Models\NonMembership::count() }}</p>
            <p>for now</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Number of User (include admin and staff)</p>
              <p class="fs-30 mb-2">{{ App\Models\User::count() }}</p>
              <p>for now</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
     
    <!-- content-wrapper ends -->
  @endsection