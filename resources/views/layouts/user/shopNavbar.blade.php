<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1><span>Rizky Bakery.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('riwayat') }}">History</a></li>
                <li><a href="{{ route('checkout') }}">Your Cart</a></li>
                {{-- <li><a href="#menu">Menu</a></li> --}}
                <!-- <li><a href="#gallery">Gallery</a></li> -->
            </ul>

        </nav><!-- .navbar -->
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
    </div>
</header><!-- End Header -->
