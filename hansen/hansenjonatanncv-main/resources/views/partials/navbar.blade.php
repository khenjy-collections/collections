<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">Hansen Jonatan</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="nav-link scrollto {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a></li>
                <li><a class="nav-link scrollto {{ $title === 'Portfolio' ? 'active' : '' }}"
                        href="/portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto {{ $title === 'Contact' ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
