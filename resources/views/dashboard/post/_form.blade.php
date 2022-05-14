@csrf
<label for="title">T&iacute;tulo</label>
<input type="text" name="title" id="title" value="{{ old('title', $category->title) }}">

<label for="slug">Slug</label>
<input type="text" name="slug" id="slug" value="{{ old('slug', $category->slug) }}">


<button type="submit">Enviar</button>