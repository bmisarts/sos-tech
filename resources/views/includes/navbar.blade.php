<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-1 px-lg-0 nav-inverse">
    <a href="{{ url('/') }}" class="navbar-brand">
        <h1 class="display-5 m-0" style="color: #6b4f9b; transform: translateY(-10px)">S<span style="color: #b68cc8">O</span><span style="color: #6b4f9b">S</span></h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <form class="nav-item nav-link" action="{{ url('/search') }}" method="GET">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="query" class="form-control" placeholder="Rechercher..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn1 text-white" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <a href="{{ url('/') }}" class="nav-item nav-link">Accueil</a>
            <a href="{{ url('about') }}" class="nav-item nav-link">A propos</a>
            <a href="{{ url('service') }}" class="nav-item nav-link">Services</a>
            <a href="{{ url('blog') }}" class="nav-item nav-link">Blog</a>
            <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>

            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ auth()->user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right last-li" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                    <a class="dropdown-item" href="{{ route('users') }}">Utilisateurs</a>
                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('posts') }}">Posts</a>
                    <a class="dropdown-item" href="{{ route('categories') }}">Categories</a>
                    <a class="dropdown-item" href="{{ route('comments') }}">Commentaires</a>
                    <a class="dropdown-item" href="">    </a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Deconnexion 
                    </a>

                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    
                </div>
            </li>
            @else
            <a href="{{ url('connexion') }}" class="nav-item nav-link last-li">Connexion</a>
            @endauth
            <!-- <a href="tel:++237652061510" class="nav-item nav-link nav-contact text-white px-5 ms-lg-5" style="background: #6b4f9b;"><i class="bi bi-telephone-outbound me-2"></i>+237 652 061 510</a> -->
        </div>
    </div>
</nav>
    <!-- Navbar End -->

