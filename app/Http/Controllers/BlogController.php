<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        // ddd($news);
        return view('welcome', compact('news'));
    }
}
