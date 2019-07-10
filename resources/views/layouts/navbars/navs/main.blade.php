<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar fixed-bottom text-white">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="material-icons fa fa-home">home</i> {{ __('Home') }}
            </a>
          </li>
          <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
            <a href="{{ route('register') }}" class="nav-link">
              <i class="material-icons">Defilé</i> {{ __('Défilé') }}
            </a>
          </li>
          <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
            <a href="{{ route('login') }}" class="nav-link">
              <i class="material-icons">Status</i> {{ __('Status') }}
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('profile.edit') }}" class="nav-link">
              <i class="material-icons">Bijoux</i> {{ __('Bijoux') }}
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('profile.edit') }}" class="nav-link">
              <i class="material-icons">Enchères</i> {{ __('Enchères') }}
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('profile.edit') }}" class="nav-link">
              <i class="material-icons">soldes</i> {{ __('Soldes') }}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<!-- End Navbar -->