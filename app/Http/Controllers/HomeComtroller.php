<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeComtroller extends Controller
{
    public function index(){
        return "Bienvenido a la pagina de inicio";
    }
}
