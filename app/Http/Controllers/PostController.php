<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return response()->json('hello');
    }
    public function show()
    {
        return response()->json('welcome');
    }
}
