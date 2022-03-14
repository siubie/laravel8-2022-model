<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class BlogController extends Controller
{
    //
    public function index()
    {
        // TODO : Buatlah Pagination dengan Eloquent dan tampilkan news per 5 data
        $news = News::orderBy('id', 'desc')->simplePaginate(5);
        // TODO : Return view welcome dengan data news
        return view('welcome', compact('news'));
    }

    public function store()
    {
        // TODO : Gunakan model news untuk menyimpan data ke database dengan menggunakan method create berilah parameter 'title' dengan nilai "Judul Baru", dan parameter 'content' dengan nilai "Berita Baru"
        $news = News::create([
            'title' => 'Judul Baru',
            'content' => 'Berita Baru',
        ]);
        $news->save();
        // TODO : Buatkan Redirect ke route named 'news.index'
        return redirect()->route('news.index');
    }

    public function update()
    {
        // TODO : Gunakan model news untuk mengambil data terakhir pada tabel news
        $news = News::latest()->first();
        // TODO : Update 'title' menjadi 'Judul Baru Updated' 'content' menjadi 'Berita Baru Updated'
        // TODO : Buatkan Redirect ke route named 'news.index'
        $news->update([
            'title' => 'Judul Baru Updated',
            'content' => 'Berita Baru Updated'
        ]);
        // TODO : Buatkan Redirect ke route named 'news.index'
        return redirect()->route('news.index');
    }

    public function destroy()
    {

        // TODO : Gunakan model news untuk mengambil data terakhir pada tabel news
        $news = News::latest()->first();
        // TODO : Hapus data tersebut
        $news->latest()->first()->delete();
        // TODO : Buatkan Redirect ke route named 'news.index'
        return redirect()->route('news.index');
    }
}
