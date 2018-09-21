<nav id='navbar' class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Laravel Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/users">Users</a>
            </li>
        </ul>


        <div class="nav-item float-right">
            @if (Auth::check())
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/users/{{Auth::user()->id}}">Profile</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </div>
            @else
                <a class="btn btn-secondary" href="/login">Log in</a>
                <a class="btn btn-warning" href="/register">Sign up</a>
            @endif
        </div>

    </div>
</nav>
