@extends('backend.layouts.app', ['title' => __('User Profile')])

@section('title', '- User Profile')

@section('content')
  @include('backend.layouts.headers.header', [
    'title' => __('Hello') . ' '. auth()->user()->name,
    'description' => __('This is your support page.You can find help by reaching us directly or find questions and answers that are frequently asked.'),
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
            
              <a href="{{ route('lead.faq') }}" class="btn btn-sm btn-default float-right">{{ __('FAQ') }}</a>
              <a href="#" class="btn btn-sm btn-default float-right">{{ __('Call') }}</a>
              

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
