<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
                <a href="" class="navbar-brand">{{$logo}}</a>

                <form action="{{route('search')}}" class="d-flex">
                    <input type="text" name="search" class="form-control mx-auto" size="70">
                    <input type="submit" name="find" class="btn btn-success ms-1">
                </form>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link" >Home</a></li>
                    @if(session()->has('login'))
                    <li class="nav-item"><a href="{{route('insert')}}" class="btn btn-success btn-sm ms-2">Insert</a></li>
                    <li class="nav-item"><a href="{{route('logout')}}" class="btn btn-warning btn-sm ms-2">Logout</a></li>
                    @else
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link ms-2">Login</a></li>
                    
                    <li class="nav-item"><a href="{{route('register')}}" class="nav-link ms-2">Register</a></li>
                    @endif
                </ul>

        </div>
</nav>
</div>
