@extends("cursos.plantilla")
@section("title", $curso->name)


@section("content")
<h1>Detalles del Curso</h1>
<h2>{{$curso->name}}</h2>
<p>{{$curso->description}}</p>
<small>Creado: {{ \Carbon\Carbon::parse($curso->created_at)->diffForHumans() }}</small><br> 
<small>Actualizado: {{ \Carbon\Carbon::parse($curso->update_at)->diffForHumans() }}</small> 
<p>{{$curso->updated_at}}</p>

<a href="{{route('cursos.index')}}">Inicio</a>
@endsection