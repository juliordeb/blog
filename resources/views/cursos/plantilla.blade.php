<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield("title")</title>
</head>

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

  </ul>

  @yield('content')

</body>

</html>