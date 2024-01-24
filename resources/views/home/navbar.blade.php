<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand">
            <img src="{{ asset('image/Group 134.png') }}" alt="Logo" width="90" height="60" class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link shadow-text" href="#" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link shadow-text" href="#About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link shadow-text" href="#Team">Team</a>
                <li class="nav-item">
                    <a class="nav-link shadow-text" href="#Contact">Contact</a>
                </li>
            </ul>

        </div>
        <div>

            <a href="{{ route('login') }}">
                <button type="button" class="btn">Login</button>
            </a>

        </div>
        {{--  <div>
            <a href="{{ route('register') }}">
                <button type="button" class="btn">Register</button>
            </a>
        </div>  --}}
    </div>
</nav>
