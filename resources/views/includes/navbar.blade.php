<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'SOS')}}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('user.posts') }}">Posts</a>
                            <a class="dropdown-item" href="{{ route('user.categories') }}">Categories</a>
                            <a class="dropdown-item" href="{{ route('user.comments') }}">Comments</a>
                            

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#" 
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="display-5 m-0" style="color: #6b4f9b;">S<span style="color: #b68cc8">O</span><span style="color: #6b4f9b">S</span></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Accueil</a>
                <a href="{{ url('about') }}" class="nav-item nav-link">A propos</a>
                <a href="{{ url('service') }}" class="nav-item nav-link">Services</a>
                <a href="{{ url('blog') }}" class="nav-item nav-link">Blog</a>
                <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                <a href="tel:++237652061510" class="nav-item nav-link nav-contact text-white px-5 ms-lg-5" style="background: #6b4f9b;"><i class="bi bi-telephone-outbound me-2"></i>+237 652 061 510</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
