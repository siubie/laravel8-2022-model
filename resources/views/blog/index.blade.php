@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @forelse($news as $new)
            <div class="card my-3">
                <div class="card-header">{{ $new->title }}</div>

                <div class="card-body">
                    {{ $new->content }}
                </div>
            </div>
          @empty
            <div class="card my-3">
                <div class="card-header">Belum ada berita</div>

                <div class="card-body">
                </div>
            </div>
          @endforelse
        </div>
    </div>
</div>
@endsection
