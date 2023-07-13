<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request; //pr ahora no estoy usando esta libreria


class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        

        
        return view('blog', ['posts' => $posts]);
    }


}  
