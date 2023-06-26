<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{url('home')}}" class="logo d-flex align-items-center me-auto me-lg-0">
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
        <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name}} <span class="caret"></span>
        </a> -->

        <div class="d-flex flex-row justify-content-end align-items-center">
            <button type="button" class="btn btn-secondary btn-danger">
                <a href="{{ route ('profile.pelanggan') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16"> 
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                </svg>
                </a>
            </button>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="btn-book-a-table2" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </div>
    </div>
</header><!-- End Header -->
