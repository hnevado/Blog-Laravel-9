@extends('template')
@section('title','home')
@section('description','Página principal de mi web')

@section('content')

<div class="bg-gray-900 px-20 py-16 mb-8 relative overflow-hidden">
  <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programación</span>
  <h1 class="text-3xl text-white mt-4">Blog</h1>
  <p class="text-sm text-gray-400 mt-2">Proyecto de desarrollo web</p>

  <img class="absolute -right-20 -bottom-20 opacity-20" src="{{ asset('images/dev.png') }}">
</div>

<div class="px-4">
    <h2 class="text-3xl mb-8 text-gray-900 text-center font-bold">Contenido del blog</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        @foreach ($posts as $post)
        <div class="px-6 py-4"> 
          <p><a href="{{ route('post', $post->slug) }} "><img class="object-cover" src="{{$post->image}}"></a></p>
          <p class="h-20">
            <a class="text-xl" href="{{ route('post', $post->slug) }}">{{$post->title}}</a>
           </p>
           <p class="border-y-2">
            <span class="text-xs text-black-600"><b>Autor:</b> {{$post->user->name}} <br/> <b>Fecha:</b> {{$post->created_at->format('d-m-Y')}}</span>
          </p>
        </div>
        @endforeach
    </div>

    {{$posts->links()}}

</div>
@endsection