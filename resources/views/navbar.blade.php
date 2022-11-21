<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GrabMytea</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link  href="/css/style.css" rel="stylesheet">
<!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- Styles -->
    </head>
    <body>

<nav class="navbar navbar-expand-lg bg-light fixed-top">
  <div class="container-fluid">

  <a class="navbar-brand" href="">GrabMytea</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      <li class="nav-item active">
                  <a class="nav-link" href="{{('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Panier</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Historique</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>



  @if (Route::has('login'))
  <div class="d-flex">
    @auth
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <a href="{{ url('/admin') }}" class="link-dark badge text-wrap text-uppercase">{{ Auth::user()->name }}</a>
      
      <a class="btn btn-primary" :href="route('logout')"
      onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                              </a>
                            </form>
                            @else
                            <a href="{{ route('login') }}"class="btn btn-outline-success my-2 my-sm-0">Log in</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                            @endauth
                          </div>
                          @endif
</div>
    </div>

</nav>

  

<!--FIN NAVBAR GRABMYTEA -->
