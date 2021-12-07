<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/app.css">
  <script src="/js/app.js"></script>
	<title>@yield("title")</title>
</head>
<div class="container mx-auto" >
<body>
 
  <style>
    .active a {
       color: rgb(201, 10, 10);
       text-decoration: none;
    }
  </style>
 <ul>
      <li class="{{setActive('home') }}"> <a href="{{route('home')}}"> Inicio </a>  </li>
      <li class="{{setActive('about') }}"> <a href="{{route('about')}}">Abaout </a> </li>
      <li class="{{setActive('cursos.*') }}"> <a href="{{route('cursos.index')}}">Cursos </a></li>
      <li class="{{setActive('contact') }}"> <a href="{{route('contact')}}">Contacto</a></li>
      @guest
      <li> <a href="{{ route('login') }}">Login</a>
      @else
      <form method="POST" action="{{ route('logout') }}">
        @csrf
    
        <x-responsive-nav-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Cerrar sesion') }}
        </x-responsive-nav-link>
      </form>
      @endguest
  </ul>
  

  @include('partials.session-succes')
  @yield('content')
 
</body>
</div>
</html>