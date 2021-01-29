@extends('dashboard.layouts.app', [
  'parentSection' => '',
  'elementName' => 'dashboard'
])

@section('pageTitle','Copa Tech - Dashboard')

@section('content')
  <div class="header pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 d-inline-block mb-0">Media Dashboard</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links">
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-home"></i></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-primary border-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total Club Members</h5>
                <span class="h2 font-weight-bold mb-0 text-white">{{ $users->count() }}</span>
              </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
  <br>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-info border-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0 text-white">Workshops</h5>
                <span class="h2 font-weight-bold mb-0 text-white">{{ $workshops->count() }}</span>
              </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
              <a href="{{ route('media.workshop.index') }}" class="text-nowrap text-white font-weight-600">See details</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-danger border-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0 text-white">courses</h5>
                <span class="h2 font-weight-bold mb-0 text-white">{{ $tracks->count() }}</span>
              </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
              <a href="{{ route('media.track.index') }}" class="text-nowrap text-white font-weight-600">See details</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-default border-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0 text-white">Stories</h5>
                <span class="h2 font-weight-bold mb-0 text-white">{{ $stories->count() }}</span>
              </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
              <a href="{{ route('media.story.index') }}" class="text-nowrap text-white font-weight-600">See details</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="card text-center">
      <div class="card-header bg-transparent">
        <h6 class="text-muted text-uppercase ls-1 mb-1">Notification</h6>
      </div>
      <div class="card-body">
        <p class="card-text">Work in progress</p>
      </div>
    </div>
    @include('dashboard.layouts.footers.auth')
  </div>
@endsection