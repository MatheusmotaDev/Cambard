<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark sticky-top bg-body-tertiary" data-bs-theme="dark">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('path/to/your/logo.png') }}" alt="Logo" style="height: 30px;">
        </a>
        <h3 class="d-none d-lg-inline mx-auto text-center text-white" id="navbarBrandCenter">Cambard</h3>


        <div class="d-flex align-items-center">
            <div class="d-lg-none">
                @auth
                <div class="dropdown">
                    <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" id="dropdownUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->getImageURL() }}" alt="{{ Auth::user()->name }}" style="width: 35px;" class="rounded-circle me-2">
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Meu Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">Sair</button>
                            </form>
                        </li>
                    </ul>
                </div>
                @endauth
            </div>
            <div class="d-none d-lg-flex">
                @auth
                <div class="dropdown">
                    <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" id="dropdownUserLg" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->getImageURL() }}" alt="{{ Auth::user()->name }}" style="width: 35px;" class="rounded-circle me-2">
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUserLg">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Meu Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">Sair</button>
                            </form>
                        </li>
                    </ul>
                </div>
                @endauth
            </div>
        </div>
    </div>
</nav>

<style>
    .navbar .dropdown-menu {
        background-color: #343a40; /* Background color */
        border: none;
        border-radius: 0.5rem;
    }

    .navbar .dropdown-menu .dropdown-item {
        color: #ffffff; /* Text color */
        transition: background-color 0.2s ease;
    }

    .navbar .dropdown-menu .dropdown-item:hover {
        background-color: #495057; /* Hover background color */
    }

    .navbar .dropdown-menu .dropdown-divider {
        border-color: #495057; /* Divider color */
    }

    .navbar .dropdown-item.text-danger {
        color: #dc3545; /* Text color for logout button */
    }

    .navbar .dropdown-item.text-danger:hover {
        background-color: #bd2130; /* Hover background color for logout button */
    }

    @media (min-width: 992px) {
        #navbarBrandCenter {
            display: block !important;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
    }
</style>
