<h1>Welcome to Activity 9</h1>

@guest
    <p>This is the landing page for guests.</p>
@endguest

@auth
    <p>This is the dashboard for registered users.</p>
@endauth

<nav>
    <ul>
        @if (Route::has('login'))
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}">Register</a>
            </li>
        @endif

        @auth
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
    </ul>
</nav>
