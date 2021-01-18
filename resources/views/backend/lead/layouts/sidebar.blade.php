<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="">
      <img src="{{ asset('images/dsc.png') }}" class="navbar-brand-img" alt="{{ config('app.nick') }}">
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
            <img alt="{{ auth()->user()->name }}" src="{{ auth()->user()->image_upload ? asset(auth()->user()->image) : auth()->user()->image }}">
            </span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
          </div>
          <a href="" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>{{ __('My profile') }}</span>
          </a>
          <a href="#" class="dropdown-item">
            <i class="ni ni-settings-gear-65"></i>
            <span>{{ __('Settings') }}</span>
          </a>
          <a href="#" class="dropdown-item">
            <i class="ni ni-calendar-grid-58"></i>
            <span>{{ __('Activity') }}</span>
          </a>
          <a href="#" class="dropdown-item">
            <i class="ni ni-support-16"></i>
            <span>{{ __('Support') }}</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run"></i>
            <span>{{ __('Logout') }}</span>
          </a>
        </div>
      </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="">
              <img src="{{ asset('images/dsc-logo.png') }}">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Form -->
      <form class="mt-4 mb-3 d-md-none">
        <div class="input-group input-group-rounded input-group-merge">
          <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fa fa-search"></span>
            </div>
          </div>
        </div>
      </form>
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
            <i class="fa fa-users" style="color: #f4645f;"></i>
            <span class="nav-link-text" style="color: #f4645f;">{{ __('User Management') }}</span>
          </a>
          <div class="collapse show" id="navbar-examples">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a class="nav-link" href="">
                  {{ __('Users') }}
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  {{ __('Roles') }}
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  {{ __('Teams') }}
                </a>
              </li>
            </ul>
          </div>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
             <i class="fab fa-blogger text-orange"></i>
            <span class="nav-link-text" style="color: #f4645f;">{{ __('Blog') }}</span>
          </a>
          <div class="collapse show" id="navbar-examples">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a class="nav-link" href="">
                  {{ __('Categories') }}
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  {{ __('stories') }}
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
           <i class="far fa-calendar-alt text-yellow"></i> {{ __('events') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
           <i class="fas fa-envelope-open-text text-blue"></i> {{ __('send Mails') }}
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">
           <i class="fas fa-envelope-open-text text-blue"></i> {{ __('Direct Chat') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-comments-dollar text-info"></i> {{ __('Chat forum') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="far fa-bell text-pink"></i> {{ __('Notifications') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-crown text-yellow"></i> {{ __('events') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('lead.profile.edit') }}">
            <i class="ni ni-planet text-blue"></i> {{ __('My Profile') }}
          </a>
        </li>
      </ul>
      <!-- Divider -->
      <hr class="my-3">
      <!-- Heading -->
      
      <!-- Navigation -->
      <ul class="navbar-nav mb-md-3">
        <li class="nav-item">
          <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt text-red"  ></i> {{ __('Logout') }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
