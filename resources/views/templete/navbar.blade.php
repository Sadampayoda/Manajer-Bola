<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="bi bi-{{$icon}}"></i> Halaman {{$page}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">keluar</a>
          </li>
          @if (auth()->user())
            <li class="nav-item">
              <a class="nav-link" href="/logout">Logout</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
          @endif
          
        </ul>
      </div>
    </div>
  </nav>