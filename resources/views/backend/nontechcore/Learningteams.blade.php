@extends('backend.layouts.app', ['title' => __('User Profile')])

@section('title', '- User Profile')

@section('content')
  @include('backend.layouts.headers.header', [
    'title' => __('Hello') . ' '. auth()->user()->name,
    'description' => __('This are the learning teams available, feel free to join any of your choice and learn with others interested in the same field as you.Keep in mind that you are not restricted to one team. Happy learning!'),
    'class' => 'col-lg-7'
  ])

  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">
                <a href="#">
                </a>
              </div>
            </div>
          </div>
          </div>
          <div class="pt-0 pt-md-4">
          <div class="row ">
              <div class="card-profile-stats d-flex justify-content-center mt-md-5">          
          <div class="card-body">
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" >
            <div class="d-flex justify-content-between">
              <a href="#" class="btn btn-sm btn-default float-right">{{ __('Software Developer') }}</a>
              <a href="#" class="btn btn-sm btn-default float-right">{{ __('Android & IOS') }}</a>
              <a href="#" class="btn btn-sm btn-default float-right">{{ __('Cloud Computing') }}</a>
              <a href="#" class="btn btn-sm btn-default float-right">{{ __('Machine Learning') }}</a>
              <a href="#" class="btn btn-sm btn-default float-right">{{ __('IoT') }}</a>
              <a href="#" class="btn btn-sm btn-default float-right">{{ __('Cybersecurity') }}</a>
              <a href="#" class="btn btn-sm btn-default float-right">{{ __('Networking') }}</a>
              <a href="#" class="btn btn-sm btn-default float-right">{{ __('Hardware') }}</a>
              <a href="#" class="btn btn-sm btn-default float-right">{{ __('UX/UI Designer') }}</a>



            </div>
                  
              @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('status') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif

              
            </form>
          </div>
        </div>
      </div>
    </div>
    @include('backend.layouts.footers.auth')
  </div>
@endsection
