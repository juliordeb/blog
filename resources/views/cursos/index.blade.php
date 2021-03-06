@extends("cursos.plantilla")
  
 @section("title")
 Cursos
@endsection 
  
  @section("content")
  <h1> Cursos Online </h1>
 
  @foreach ($curso as $cursos)

   <li>
	   <a href="{{route('cursos.show', $cursos)}}">{{ $cursos->name}}</a> <br>
	   <small> {{$cursos->description}} </small>
     <small>{{ \Carbon\Carbon::parse($cursos->created_at)->diffForHumans() }}</small> 
    </li>

  @endforeach
    <br>

     @auth
    <form action="{{ route('cursos.create')}}">
      <button type="submit">Nuevo Curso</button>
    </form>
     @endauth
     
@endsection