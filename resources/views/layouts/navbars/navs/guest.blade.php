<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-relative fixed-top text-white" style="background-color: black !important;">
        <div class="navbar-wrapper" style="
    display: flex;
    width: 100%;
    position: absolute;
    top: 0px;
    margin: auto;">
            <div class="navbar-collapse collapse order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
                    <a href="{{ route('register') }}" class="nav-link">
                      <i class="material-icons"></i> {{ __('Langue') }}
                    </a>
                  </li>
                  <li class="nav-item float-left">
                    <a class="nav-link">
                      <i class="material-icons fa fa-phone"></i> {{ __('+33 3510252862') }}
                     </a>
                      
                  </li>
                </ul> 
            </div>
             
          
          <div class="mx-auto order-0">
              <a class="navbar-brand mx-auto" href="{{ route('home') }}" style="text-align: center;">{{ $title }}</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
              </button>
          </div>
          
          <div class="navbar-collapse collapse order-1 order-md-0 dual-collapse2">

            <ul class="navbar-nav ml-auto" style="text-align: right;">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                  <i class="material-icons fa fa-heart"></i> 
                </a>
              </li>
              <li class="nav-item {{ $activePage == 'register' ? ' active' : '' }}">
                <a href="{{ route('register') }}" class="nav-link">
                  <i class="material-icons"></i> {{ __('Register') }}
                </a>
              </li>
              <li class="nav-item {{ $activePage == 'login' ? ' active' : '' }}">
                <a href="{{ route('login') }}" class="nav-link">
                  <i class="material-icons"></i> {{ __('Login') }}
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('profile.edit') }}" class="nav-link">
                  <i class="material-icons"></i> {{ __('Profile') }}
                </a>
              </li>
            </ul>
          </div>
        </div>
      
      
      <div class="collapse navbar-collapse " style="height: auto; margin-top:20px;">
        <ul class="navbar-nav w-100 container justify-content-center"> 
            <li class="nav-item">
              <a href="{{ route('home') }}" class="nav-link">
                <i class="material-icons fa fa-home"></i> {{ __('Home') }}
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
            <a href="{{ route('register') }}" class="nav-link">
              <i class="material-icons"></i> {{ __('Défilé') }}
            </a>
          </li>
          <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
            <a href="{{ route('login') }}" class="nav-link">
              <i class="material-icons"></i> {{ __('Status') }}
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('profile.edit') }}" class="nav-link">
              <i class="material-icons"></i> {{ __('Bijoux') }}
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('profile.edit') }}" class="nav-link">
              <i class="material-icons"></i> {{ __('Enchères') }}
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('profile.edit') }}" class="nav-link">
              <i class="material-icons"></i> {{ __('Soldes') }}
            </a>
          </li>
        </ul>
      </div>
  </nav>
<!-- End Navbar -->