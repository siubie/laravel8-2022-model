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
        $list = News::latest()-> paginate(5);
        // TODO : Return view welcome dengan data news
        return view('welcome', compact('list'));
    }

    public function store()
    {
        // TODO : Gunakan model news untuk menyimpan data ke database dengan menggunakan method create berilah parameter 'title' dengan nilai "Judul Baru", dan parameter 'content' dengan nilai "Berita Baru"
        News::create ([
            'titile' => 'Judul Baru',
            'content' => 'Berita Baru'
        ]);
        // TODO : Buatkan Redirect ke route named 'news.index'
        return redirect()-> route('news.index');
    }

    public function update()
    {
        // TODO : Gunakan model news untuk mengambil data terakhir pada tabel news
        News :: latest() -> first ->update ([
            'title' => 'Judul Baru',
            'content' => 'Berita Baru'
        ]);

        // TODO : Update 'title' menjadi 'Judul Baru Updated' 'content' menjadi 'Berita Baru Updated'
        // TODO : Buatkan Redirect ke route named 'news.index'
        return redirect()-> route('news.index');
    }

    public function destroy()
    {
        // TODO : Gunakan model news untuk mengambil data terakhir pada tabel news
        // TODO : Hapus data tersebut
        News :: latest() -> first -> delete();
        // TODO : Buatkan Redirect ke route named 'news.index'
        return redirect()-> route('news.index');
    }
}
