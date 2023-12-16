<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Challenge Kemerdekaan </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          @guest
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
          </li>
          @endguest
          <li class="nav-item">
            <a class="nav-link" href="/challenge">Challenge</a>
          </li>
         
        </ul>
        <ul class="navbar-nav">

          @guest
            <li class="nav-item">
                <a href="/daftar" class="btn btn-light nav-link border border-light fw-bold text-white">Daftar</a>
            </li>
            @endguest
          
          @auth
          <li class="nav-item">
              <a href="/keluar" class="btn btn-light nav-link border border-light fw-bold text-white">Keluar</a>
          </li>
        @endauth
        </ul>
      </div>
    </div>
  </nav>