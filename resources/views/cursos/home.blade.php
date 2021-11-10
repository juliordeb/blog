<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
</head>
<body>
  <h1>Pagina en construccion</h1>

  @foreach ($curso as $cursos)

   <li>
	   {{ $cursos->name}}<br>
	   <small>{{$cursos->description}}</small>
    
   </li>

   
  @endforeach
 
</body>
</html>