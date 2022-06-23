<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

 /*
            Post::get();-> Trae todos los registros de la base de datos
            Post::first();-> Trae el primer registro de la base de datos
            Post::find(id); -> Busca un registro en la base de datos por medio de su id
            Post::latest(); -> Trae todos los registros de la base de datos, y los ordena de forma descendente

            adicional, podemos utilizar el método paginate(), para realizar la paginación, solo no nos debemos de incluir en nuestras vistas la propiedad links() para que podamos visualizar los controles de paginación
        */

class PageController extends Controller
{
    public function home(Request $request)
    {


        $search = $request->search;

        $posts = Post::where('title','LIKE',"%{$search}%")
        ->with('user')
        ->latest()
        ->paginate();

        return view('home',['posts' => $posts]);


    }

    public function post(Post $post)
    {

        return view('post', ['post' => $post]);
        

    }

}
