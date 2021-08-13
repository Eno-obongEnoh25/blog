<!doctype html>
<html lang="en">
  <head>
    <title>Blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="{{ route('blog') }}"><i class="fa fa-home text-primary fa-2x" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                        </li>
                    </ul>

                    @guest
                    <ul class="navbar-nav">
                        {{-- <li class="nav-item active">
                            <a class="nav-link" href="{{ route('signup') }}">Sign Up</a>&nbsp;&nbsp;
                        </li> --}}
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('login') }}">Log In</a>
                        </li>
                    </ul>
                    @endguest

                    @auth
                        <div class=""><h5 class="font-large">{{auth()->user()->name}}</h5></div>&nbsp;
                    {{-- <h5><a class="nav-link" href="{{ route('create') }}">Create Post</a></h5> --}}
                        <form action="{{ route('logout') }}" method="Post" class="form-inline ml-5 my-2 my-lg-0">
                            @csrf
                            <button class="btn btn-primary  p-2 px-4 text-light" type="submit">Logout</button>
                        </form>
                    @endauth
            </div>
        </nav>
        <div>
            @yield('content')
        </div>


{{-- <footer>
    <div class="d-flex justify-content-around">

            <div class="">
                <h3>
                    Pages
                </h3>

                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/blog">Blog</a>
                    </li>
                    <li>
                        <a href="login">login</a>
                    </li>
                    <li>
                        <a href="register">Register</a>
                    </li>
                </ul>
            </div>

            <div class="">
                <h3>
                    Find us
                </h3>

                <ul>
                    <li>
                        <a href="/">What we do</a>
                    </li>
                    <li>
                        <a href="">Address</a>
                    </li>
                    <li>
                        <a href="">Phone</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="">
                <h3>
                    Latest Posts
                </h3>

                <ul>
                    <li>
                        <a href="/">Why we love tech</a>
                    </li>
                    <li>
                        <a href="">Why we love design</a>
                    </li>
                    <li>
                        <a href="">Why we use laravel</a>
                    </li>
                    <li>
                        <a href="">Why PHP is the best</a>
                    </li>
                </ul>
            </div>


    </div>
    <p>
        Copyright &copy;
    </p>
</footer> --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
