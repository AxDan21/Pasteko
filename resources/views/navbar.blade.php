<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mixes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Armado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Inventary</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <span class="nav-link">Bienvenido, @Auth {{Auth::User()->name}} @endauth </span>
            </li>
            <li class="nav-item">
                <a href="{{route('logout')}}"><button class="btn btn-outline-danger">Logout</button></a>
            </li>
        </ul>
    </div>
</nav>
