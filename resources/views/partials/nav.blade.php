<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">{{ config('app.name') }}</a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ config('app.vue_url') }}/dashboard">Dashboard</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/bids">Bids</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/organizations">Organizations</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/bidders">Bidders</a>
            </li>
            @if(!Auth::guest())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </li>
            @endif
        </ul>   
    </div>
</nav> 
