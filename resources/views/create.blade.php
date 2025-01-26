@extends('layouts.potato')

@section('title', '投稿作成')

@section('content')
    <h1>新しい投稿を作成</h1>

    <form method="POST" action="{{ route('store') }}">
        @csrf
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mt-3">
            <label for="body">本文</label>
            <textarea id="body" name="body" class="form-control @error('body') is-invalid @enderror" rows="5">{{ old('body') }}</textarea>
            @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mt-3">
            <label for="tags">タグ</label>
            <select id="tags" name="tags[]" class="form-control" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', [])) ? 'selected' : '' }}>{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">投稿を作成</button>
    </form>
@endsection
