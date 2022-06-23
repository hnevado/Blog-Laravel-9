@csrf 

<p>
    <label class="uppercase text-gray-700 text-xs">URL Imagen</label>
    <span class="text-xs text-red-600">@error('image') {{ $message }} @enderror</span>
</p>

<p>
    <input type="text" name="image" class="rounded border-gray-200 w-full mb-4" value="{{ old('image', $post->image) }}">
</p>

<p>
    <label class="uppercase text-gray-700 text-xs">Título</label>
    <span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>
</p>

<p>
    <input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{ old('title', $post->title) }}">
</p>

<p>
    <label class="uppercase text-gray-700 text-xs">Slug</label>
    <span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>
</p>

<p>
    <input type="text" name="slug" class="rounded border-gray-200 w-full mb-4" value="{{ old('slug', $post->slug) }}">
</p>



<p>
    <label class="uppercase text-gray-700 text-xs">Contenido</label>
    <span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
</p>

<p>
    <textarea class="rounded border-gray-200 w-full mb-4" name="body" rows="15">{{ old('body', $post->body) }}</textarea>
</p>

<div class="flex justify-between items-center">

  <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

  <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">

</div>