@extends("cursos.plantilla")
@section("title", 'Editar Curso')


@section("content")

@include('partials.validation-errors')


<h1>Editar Curso</h1>
<form action="{{route('cursos.update', $curso)}}" method="POST">
    @method('PATCH')

    @include('cursos._form')

<button type="submit">Actualizar</button>
</form>
@endsection