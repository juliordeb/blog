@extends("cursos.plantilla")
@section("title", "Bienvenidos")
@section("content")
<h1> Bienvenidos al sistema de Cursos Online</h1>
@auth
{{ auth()->user()->name }}    
@endauth

@endsection
