@extends('layouts.potato')

@section('title', $post->title)

@section('content')
<div class="container mt-5">
    <h1 class="text-primary">{{ $post->title }}</h1>
    <p class="text-muted">投稿日: {{ $post->published_at ? $post->published_at->format('Y-m-d') : '未公開' }}</p>
    <p>{{ $post->body }}</p>

    <div class="mb-4">
        <form method="POST" action="{{ route('like', $post->id) }}">
            @csrf
            <button type="submit" class="btn btn-outline-primary">
                {{ $post->likes->where('user_id', auth()->id())->count() > 0 ? 'いいね解除' : 'いいね' }}
            </button>
        </form>
        <small class="text-muted">いいね数: {{ $post->likes->count() }}</small>
    </div>

    <hr>
    <h4>コメント</h4>
    <ul class="list-unstyled">
        @forelse ($post->comments as $comment)
            <li class="mb-3">
                <strong>{{ $comment->user->name }}</strong>: {{ $comment->body }}
                <small class="text-muted">({{ $comment->created_at->format('Y-m-d H:i') }})</small>
            </li>
        @empty
            <p>コメントがありません。</p>
        @endforelse
    </ul>

    <form method="POST" action="{{ route('comment', $post->id) }}">
        @csrf
        <div class="form-group">
            <label for="comment">コメントを追加:</label>
            <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">送信</button>
    </form>
</div>
@endsection
