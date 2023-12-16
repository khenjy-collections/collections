<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link active" aria-current="page">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="/daftar" class="nav-link">DAFTAR</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item text-nowrap">
                            <a href="/logout" class="nav-link px-3">LOGOUT</a>
                        </li>
                    @else
                        <li class="nav-item text-nowrap">
                            <a href="/login" class="nav-link px-3">LOGIN</a>
                        </li>
                    @endauth
                </ul>
            </div>
    </nav>
</div>
