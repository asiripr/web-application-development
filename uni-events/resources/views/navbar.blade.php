<div class="new_navbar">
    <div class="new_logo">UNI</div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">Event</a></li>
            <li><a href="{{ route('about') }}">Profile</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
        </ul>
    </nav>
    <div class="new_auth_buttons">
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}" class="button button-login">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="button button-login">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="button button-register">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</div>
