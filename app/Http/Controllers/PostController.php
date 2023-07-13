<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB; //puedo traerme los datos de una base de datos con el objeto DB especificando la tabla
// use Illuminate\Http\Request; //pr ahora no estoy usando esta libreria
use App\Models\Post; 

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();  //este post es mi modelo post que usa el metodo get 
        
        return view('blog', ['posts' => $posts]);
    }
}  
