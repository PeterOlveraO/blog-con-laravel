<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Bienvenidos a la pagina de posts";
    }

    public function create(){
        return "Formulario para crear un post";
    }

    public function show($show){
        return "Aqui se muestra el post con id: {$show}";
    }
}
