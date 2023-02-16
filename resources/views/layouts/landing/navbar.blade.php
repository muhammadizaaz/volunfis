    <!--Navbar Start-->
    @guest
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="nav-sticky">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="index.html">
                <img src="{{ asset('landing') }}/images/logo-light.png" alt="" class="logo-light"
                    height="18" />
                <img src="{{ asset('landing') }}/images/logo-dark.png" alt="" class="logo-dark"
                    height="18" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="mySidenav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="btn btn-custom me-4">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endguest
    @auth
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="nav-sticky">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="index.html">
                <img src="{{ asset('landing') }}/images/logo-light.png" alt="" class="logo-light"
                    height="18" />
                <img src="{{ asset('landing') }}/images/logo-dark.png" alt="" class="logo-dark"
                    height="18" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="mySidenav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="btn btn-custom me-4">Nama</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endauth
    <!-- Navbar End -->