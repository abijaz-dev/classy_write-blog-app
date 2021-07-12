<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top rounded">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand fs-2 fst-normal pb-2"><i class="bi bi-journal-text  h1"></i> <span
                class="text-info">Classy</span>Write</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuButton">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuButton">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-1">
                @if(Auth::guest())

                <!-- Navbar Items -->
                <li class="nav-item">
                    <a href="{{ url('/login') }}" class="nav-link fw-bolder">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/register') }}" class="nav-link fw-bolder">Register</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/posts') }}" class="nav-link fw-bolder">Blogs</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link fw-bolder">Contact Us</a>
                </li>
                @else
                
                <!-- Navbar Items -->
                <li class="nav-item">
                    <a href="{{ url('/posts') }}" class="nav-link fw-normal">Blogs</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link fw-normal">Contact</a>
                </li>

                <!-- User Dropdown Menu -->
                <li class="nav-item dropdown">
                    <button href="#" class="btn btn-secondary text-light nav-link fw-normal dropdown-toggle p-sm-2"
                        role="button" id="dropdownMenu" data-bs-toggle="dropdown">{{ Auth::user()->name }}</button>

                    <!-- Dropdown Items -->
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end">
                        <li><a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a></li>
                        <li><a href="{{ route('logout') }}" class="dropdown-item"
                                onclick="event.preventDefault();document.getElementById('logout').submit();">Logout</a>
                            <form action="{{ route('logout') }}" method="POST" class="d-none" id="logout">
                                @csrf<br>
                            </form>
                        </li>
                    </ul>
                </li>
                @endif

            </ul>
        </div>
    </div>
</nav><!-- /.Top navbar -->
