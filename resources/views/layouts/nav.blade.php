<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container ">

        <a class="navbar-brand" href="#">Product Api</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav text-center">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home </a>
            </li>
           
            @guest
            <li class="nav-item">
                <a class="nav-link " href="{{route('show.register')}}">Register</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('show.login')}}">Login</a>
            </li>

            @endguest


            @auth
                <li class="nav-item">
                    <a class="nav-link" href="/products">Products</a>
            </li>

         
            @endauth

            </ul>

            
              

            
        </div>

    </div>

        @auth
        
            <span class="badge badge-secondary m-1 fs-5">
                Hi there, {{Auth::user()->name}}
            </span>


        <form action="{{route('logout')}}" method="POST" class="m-0">
            @csrf
            <button class="btn btn-outline-success my-2 my-sm-0 m-1" type="submit">Log out</button>
        </form>
        @endauth
</nav>