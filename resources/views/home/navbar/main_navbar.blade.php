<nav class="navbar navbar-expand-lg navbar-light bg-light drop-shadow-md">
  <div class="container-fluid w-full   mb-3">
    <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">Task Management System</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        
        @if(Auth::check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> {{ Auth::user()->email }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Account</a>
            <a class="dropdown-item" href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log Out</a>
          </div>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        @endif

      </ul>
    </div>
  </div>
</nav>
