<h1>Welcome to Activity 9</h1>
<p>This is the landing page for guests.</p>

<nav>
    <ul>
        <!-- Other navigation links can go here -->
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
    </ul>
</nav>