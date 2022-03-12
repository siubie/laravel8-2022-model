@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @forelse ($news as $item)
                    <div class="card my-3">
                        <div class="card-header">{{ $item->title }}</div>
                        <div class="card-body">{{ $item->content }}</div>
                    </div>
                @empty
                    <div class="card my-3">
                        <div class="card-header">Berita Terbaru</div>
                        <div class="card-body">
                            Belum ada berita
                        </div>
                    </div>
                @endforelse
                {{ $news->links() }}
            </div>
        </div>
    </div>
@endsection
