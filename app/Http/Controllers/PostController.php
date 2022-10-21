<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostModel;

class PostController extends Controller
{
    public function index()
    {
        $test = PostModel::all();
        dd($test);
        
    }
}
