@extends('layouts.potato')

@section('title', '投稿一覧')

@section('content')
<div class="container mt-5">
    <!-- 新規投稿ボタン -->
    <div class="text-center mb-4">
        <a href="{{ route('create') }}" class="btn btn-success">新規投稿</a>
    </div>

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->body, 150) }}</p>
                        <div class="d-flex justify-content-between">
                            <small class="text-muted">投稿日: {{ $post->published_at->format('Y-m-d') }}</small>
                            <a href="{{ route('show', $post) }}" class="btn btn-link">続きを読む</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- ページネーション -->
    <div class="d-flex justify-content-center mt-4">
        <nav>
            {{ $posts->links('pagination::bootstrap-4') }}
        </nav>
    </div>
</div>
@endsection
