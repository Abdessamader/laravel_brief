<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Post_test</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light pr-0">
        <div class="container-fluid">
            <a class="navbar-brand" href=" {{'dashboard'}} ">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href=" {{route('posts')}} ">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav  ">
                    {{-- @if (auth()->user())
                    <li class="nav-item">
                        <a class="btn btn-outline-dark mr-2" href="#">Logout</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="btn btn-outline-primary mr-2" href="#">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-outline-success" href=" {{route('register')}} ">Register</a>
                    </li>
                    @endif --}}
                     @auth
                    <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link text-dark pr-4" href="#" >{{auth()->user()->username}}</a>
                        </li>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                        <button class="btn btn-outline-dark  " href="">Logout</button>
                    </form>
                    </li>
                    @endauth

                    @guest
                    <li class="nav-item">
                        <a class="btn btn-outline-primary mr-2" href="{{route('login')}}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-outline-success" href=" {{route('register')}} ">Register</a>
                    </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

    </div>



    @yield('content')


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
