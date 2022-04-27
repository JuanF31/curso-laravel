<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
        $data = array(
            'name' => 'Juan Francisco',
            'age' => 21,
            'html' => '<h1>Titulo</h1>'
        );
        return view('index', $data);
    }
}
