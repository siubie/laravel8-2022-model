<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        // TODO : Buatlah pagination dengan eloquent dan tampilkan news per 5 data
        $news = News::latest()->paginate(5);
        // TODO : Return view welcome dengan data news
        return view('welcome', compact('news'));
    }

    public function store()
    {
        // TODO : Gunakan model news untuk menyimpan data ke database dengan menggunakan method create berilah parameter 'title' dengan nilai "Judul Baru", dan parameter 'content' dengan nilai "Berita Baru"
        // TODO : Buatkan Redirect ke route named 'news.index' 
        return News::create([
            'title' => 'Judul Baru',
            'content' => 'Berita Baru',
        ]) ? redirect('/') : redirect('/');
    }

    public function update()
    {
        // TODO : Gunakan model news untuk mengambil data terakhir pada tabel news 
        // TODO : Update 'title' menjadi 'Judul Baru Updated' 'content' menjadi 'Judul Baru Updated'
        // TODO : Buatkan Redirect ke route named 'news.index' 
        return News::latest()->first()->update([
            'title' => 'Judul Baru Updated',
            'content' => 'Judul Baru Updated',
        ]) ? redirect('/') : redirect('/');
    }

    public function destroy()
    {
        // TODO : Gunakan model news untuk mengambil data terakhir pada tabel news 
        // TODO : Hapus data tersebut  
        // TODO : Buatkan Redirect ke route named 'news.index' 
        return News::latest()->first()->delete()
        ? redirect('/') : redirect('/');
    }
}
