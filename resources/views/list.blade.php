@extends('layouts.potato')

@section('title', '投稿一覧')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->body, 150) }}</p>
                        <div class="d-flex justify-content-between">
                            <small class="text-muted">投稿日: {{ $post->published_at->format('Y-m-d') }}</small>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-link">続きを読む</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- ページネーション -->
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection
