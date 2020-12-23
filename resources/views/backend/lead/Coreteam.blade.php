@extends('backend.layouts.app', ['title' => __('User Profile')])

@section('title', '- User Profile')

@section('content')
  @include('backend.layouts.headers.header', [
    'title' => __('Hello') . ' '. auth()->user()->name,
    'description' => __('Meet The Team.Passionate students and faculty staff driving the success of the program. '),
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
          <div class="row">
          <div class="col">
              <div class="card-profile-stats d-flex justify-content-center mt-md-5">          
          <div class="card-body">
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

          <section id="team" class="section-spacer team-section">
          <div class="container-fluid">
        <div id="carouselExample" class="carouselPrograms carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item  active">
              <div class="card event-card">
                <div class="card hovercard">
                  <div class="cardheader"></div>
                  <div class="avatar">
                    <img src="{{ asset('images/frontend/team/avatar.png') }}" alt="mentor avatar">
                  </div>
                  <div class="info">
                    <div class="title">
                      <h5>name</h5>
                      <p>profession</p>
                    </div>
                    <div class="desc">Mobile and Web developer</div>
                    <div class="desc">A Software Developer</div>
                  
                  </div>
                  <div class="bottom">
                    <ul class="social-list__inline mt-10">
                      
                        <a href="https://twitter.com/" target="_blank" rel="noopener">
                          <i class="fab fa-twitter"></i>
                        </a>
                      
                      
                        <a href="https://github.com/" target="_blank" rel="noopener">
                          <i class="fab fa-github"></i>
                        </a>
                      
                      
                        <a href="https://www.linkedin.com/in/" target="_blank" rel="noopener">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
  </section>

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