@csrf
<label for="title">T&iacute;tulo</label>
<input type="text" class="form-control" name="title" id="title" value="{{ old('title', $post->title) }}">

<label for="slug">Slug</label>
<input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">

<label for="category_id">Categoria</label>
<select class="form-control" name="category_id" id="category_id">
    <option value=""></option>
    @foreach ($categories as $title => $id)
        <option {{ old("category_id", $post->category_id) == $id ? "selected" : "" }} value="{{ $id }}">{{ $title }}</option>
    @endforeach
</select>

<label for="posted">Posteado</label>
<select class="form-control" name="posted" id="posted">
    <option {{ old("posted", $post->posted) == "not" ? "selected" : "" }} value="not">No</option>
    <option {{ old("posted", $post->posted) == "yes" ? "selected" : "" }} value="yes">Si</option>
</select>

<label for="content">Contenido</label>
<textarea name="content" class="form-control" id="content">{{ old('content', $post->content) }}</textarea>

<label for="content">Descripci&oacute;n</label>
<textarea name="description" class="form-control" id="description">{{ old('description', $post->description) }}</textarea>

@if (isset($task) && $task == "edit")
    <label for="image">Imagen</label>
    <input type="file" class="form-control" name="image" id="image">
@endif

<button class="btn btn-success mt-3" type="submit">Enviar</button>