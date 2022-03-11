<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(5);       // ddd($news);
        return view('welcome', compact('news'));
    }

    public function store()
    {
        // TODO : Gunakan model news untuk menyimpan data ke database dengan menggunakan method create berilah parameter 'title' dengan nilai "Judul Baru", dan parameter 'content' dengan nilai "Berita baru"
        // TODO : Buatkan Redirect ke route named 'news.index' 
    }

    public function update()
    {
        // TODO : Gunakan model news untuk mengambil data terakhir pada tabel news 
        // TODO : Buatkan Redirect ke route named 'news.index' 
    }

    public function destroy()
    {
        // TODO : Gunakan model news untuk mengambil data terakhir pada tabel news 
        // TODO : Hapus data tersebut  
        // TODO : Buatkan Redirect ke route named 'news.index' 
    }
}
