@extends("cursos.plantilla")
@section("title", 'Nuevo Curso')

@include('partials.validation-errors')


@section("content")
<h1>Nuevo Curso</h1>

<form action="{{route('cursos.store')}}" method="POST">
    
@include('cursos._form') 

<button type="submit">Guardar</button>
</form>
@endsection