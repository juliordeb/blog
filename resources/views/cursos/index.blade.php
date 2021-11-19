@extends("cursos.plantilla")
  
 @section("title")
 Cursos
@endsection 
  
  @section("content")
  <h1> Cursos Online </h1>
  @foreach ($curso as $cursos)

   <li>
	   {{ $cursos->name}}<br>
	   <small> {{$cursos->description}} </small>
     <small> {{$cursos->updated_at->diffForHumans()}} </small> 
    
   </li>

     @endforeach
@endsection