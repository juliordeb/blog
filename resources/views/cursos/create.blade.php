@extends("cursos.plantilla")
@section("title", 'Nuevo Curso')



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@section("content")
<h1>Nuevo Curso</h1>
<form action="{{route('cursos.store')}}" method="POST">
    @csrf
<label>
    Titulo del Curso:
    <input type="text" name="name">
</label><br>
<label>
    Descripcion:<br>
    <textarea name="description" cols="30" rows="10"></textarea>
</label><br>
<label>
    Autor:
    <input type="text" name="author">
</label><br>
<label>
    Url:
    <input type="text" name="url">
</label><br>

<button type="submit">Guardar</button>
</form>
@endsection