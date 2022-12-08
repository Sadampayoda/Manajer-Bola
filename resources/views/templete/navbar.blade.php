<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="bi bi-{{$icon}}"></i> Halaman {{$page}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          
          @if (auth()->user())
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Money : <p class="text-warning">{{auth()->user()->money}}$<p></a></li>
              @if (!Request::is('profile'))
                <li><a class="dropdown-item" href="/profile">Profile</a></li>  
              @endif
              @if (!Request::is('/'))
                <li>
                  <a class="dropdown-item" href="/">Home</a>
                </li>
              @endif
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">logout</a></li>
            </ul>
          </li>
          @else
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">keluar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
          @endif

           
          
          
        </ul>
      </div>
    </div>
  </nav>