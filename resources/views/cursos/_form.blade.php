@csrf
<label>
    Titulo del Curso:
    <input type="text" name="name" value= "{{old('name', $curso->name)}}">
</label><br>
<label>
    Descripcion:<br>
    <textarea name="description" >{{old('description', $curso->description)}}</textarea>
</label><br>
<label>
    Autor:
    <input type="text" name="author" value= "{{old('author', $curso->author)}}">
</label><br>
<label>
    Url:
    <input type="text" name="url" value= "{{old('url', $curso->url)}}">
</label><br>
