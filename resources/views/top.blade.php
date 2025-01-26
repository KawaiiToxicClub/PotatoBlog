@extends('layouts.potato')

@section('title', 'Top')

@section('content')
<h1 class="text-center text-primary">ようこそ、{{ Auth::user()->name }}さん！</h1>
<div class="container mt-5">
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->body, 150) }}</p>
                        <div class="d-flex justify-content-between">
                            <small class="text-muted">投稿日: {{ $post->published_at ? $post->published_at->format('Y-m-d') : '未公開' }}</small>
                        </div>
                        <a href="{{ route('show', ['id' => $post->id]) }}" class="btn btn-link">続きを読む</a>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    投稿がありません。
                </div>
            </div>
        @endforelse
    </div>

    @if ($posts->count() > 0)
        <a href="{{ route('list') }}" class="btn btn-primary">さらに見る</a>
    @endif
</div>
@endsection
