<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    function index(){
        $posts = array(
            1,2,3,4, 'Andres'
        );
        return view('dashboard.test.index', compact('posts'));
    }
}
