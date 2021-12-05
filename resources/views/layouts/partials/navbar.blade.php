<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="#">S-STATION</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        @if(isset(auth()->user()->name))
        <ul class="navbar-nav ms-3">
            @if(auth()->user()->user_type == 3 || auth()->user()->user_type == 1)
            <li class="nav-item">
                <a class="nav-link {{setActive('/')}}" aria-current="page" href="{{route('clients.index')}}">Clients</a>
            </li>
            @endif
            @if(auth()->user()->user_type == 3)
                <li class="nav-item">
                    <a class="nav-link {{setActive('agents')}}" aria-current="page" href="{{route('agents.index')}}">Agents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{setActive('stations')}}" aria-current="page" href="{{route('station.index')}}">Stations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{setActive('report')}}" aria-current="page" href="{{route('report.index')}}">Report</a>
                </li>
            @endif
        </ul>
        @endif
    <ul class="navbar-nav ms-auto">
    @if(isset(auth()->user()->name))
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{explode(" ", auth()->user()->name)[0]}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('UserLogOutForm').submit();">Logout</a></li>
        </ul>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link {{setActive('login')}}" href="{{route('login')}}">Login</a>
    </li>
    @endif
</ul>
</div>
</div>
</nav>
