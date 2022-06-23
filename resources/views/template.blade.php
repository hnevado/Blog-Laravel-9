<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" value="@yield('description')">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
</head>
<body>
  <div class="container px-4 mx-auto"> 
    <header class="p-5 flex justify-between items-center py-4 bg-sky-50 ">
      <div class="flex items-center flex-grow gap-4">
         <a href="{{route('home')}}">
           <img src="{{asset('images/logo.png') }}" alt="Logo" class="h-12">
         </a>

         <form class="flex-grow" action="{{ route('home') }}" method="GET">
           <input class="border border-gray-200 py-2 px-4 w-1/2" value="{{ request('search') }}" type="text" name="search" placeholder="Buscar...">
         </form>

      </div>

      @auth 
          <a href="{{ route('dashboard') }}">Dashboard</a>
        @else 
          <a href="{{ route('dashboard') }}">Iniciar sesión</a>
        @endauth

    </header>

    <div class="opacity-60 h-px mb-8" style="
    background:linear-gradient(to right,
    rgba(200,200,200,0) 0%,
    rgba(200,200,200,0.5) 30%,
    rgba(200,200,200,1) 70%,
    rgba(200,200,200,0)
    );">

    </div>
    

    @yield('content')


    <div class="opacity-60 h-px mt-8" style="
    background:linear-gradient(to right,
    rgba(200,200,200,0) 0%,
    rgba(200,200,200,0.5) 30%,
    rgba(200,200,200,1) 70%,
    rgba(200,200,200,0)
    );">

    </div>

    <footer class="p-5 py-16 bg-sky-50 flex justify-between items-center">
      
        <img src="{{asset('images/logo.png') }}" alt="Logo" 
          class="h-12">
          <a href="http://www.hnevado.es/" target="_blank">Hector Nevado</a> 
      </footer>

  </div>

    


</body>
</html>