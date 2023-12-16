<nav class="navbar navbar-expand-lg  sticky-top bg-white navbar-light custom-navbar w-100">
    <div class="container">
        <a class="navbar-brand  " href="/"> <img src="{{ asset('img/logo.png') }}" alt="" width="40"
                height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-end me-5" id="navbarNavDropdown">
            <ul class="navbar-nav me-2 custom-item ">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item dropdown " id="dropdownButton">
                    <a class="nav-link dropdown-toggle {{ $title === 'Our Services' ? 'active' : '' }}"
                        href="/our-services" aria-expanded="false">
                        Our Services
                    </a>
                    <ul class="dropdown-menu menu ">
                        <li><a class="dropdown-item {{ $title === 'Batam Shuttle Laundry' ? 'active' : '' }}"
                                href="/batam-shuttle">Batam Shuttle <br />Laundry</a></li>
                        <li><a class="dropdown-item {{ $title === 'Price' ? 'active' : '' }}" href="/price">Price</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Online Order' ? 'active' : '' }}" href="/online-order">Online
                        Order </a>
                </li>
                <li class="nav-item dropdown  " id="dropdownButton2">
                    <a class="nav-link dropdown-toggle {{ $title === 'About Us' ? 'active' : '' }}" href="/about-us"
                        role="button" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu " id="menu2">
                        <li><a class="dropdown-item" href="/faq">FAQ</a></li>
                        <li><a class="dropdown-item" href="/termsandconditions">Terms and Conditions</a></li>
                        <li><a class="dropdown-item" href="/contact">Contact Us</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown  " id="dropdownButton3">
                    <a class="nav-link dropdown-toggle" href="/our-outlet" role="button" aria-expanded="false">
                        Our Outlet
                    </a>
                    <ul class="dropdown-menu menu" id="menu3">
                        <li><a class="dropdown-item" href="#">Laundry Batam</a></li>
                        <li><a class="dropdown-item" href="#">Laundry Kepulauan Riau</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown  " id="dropdownButton4">
                    <a class="nav-link dropdown-toggle" href="/ourservice" role="button" aria-expanded="false">
                        My Account
                    </a>
                    <ul class="dropdown-menu menu" id="menu4">
                        <li><a class="dropdown-item" href="/cart">Cart</a></li>
                        <li><a class="dropdown-item" href="/checkout">Checkout</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <a href="/cart" class="nav-link"><i class="bi bi-cart"></i></a>
                <form class="d-flex" role="search">
                    <button class="btn " type="submit"><i class="bi bi-search text-dark"></i></button>
                </form>
            </ul>
        </div>
    </div>
</nav>
