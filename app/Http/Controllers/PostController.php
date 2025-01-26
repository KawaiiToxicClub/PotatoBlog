<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // 投稿の一覧表示
    public function top()
    {
        // データベースから投稿を取得
        $posts = Post::latest()->take(5)->get(); 

        // ビューに渡す
        return view('top', compact('posts'));
    }

    public function list()
{
    // 投稿を10件ずつページネーションで取得
    $posts = Post::latest()->paginate(10);

    // ビューに渡す
    return view('list', compact('posts'));
}

    // 投稿の作成画面表示
    public function create()
    {
        $tags = Tag::all();
        return view('create', compact('tags'));
    }

    // 投稿の保存
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'tags' => 'array|exists:tags,id'
    ]);

    // ログインしていない場合はリダイレクトする
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'ログインが必要です');
    }
    $userId = auth()->id();
    if (!$userId) {
        dd('ユーザーIDが取得できませんでした');
    }
    // 投稿作成
    $post = Post::create([
        'title' => $request->title,
        'body' => $request->body,
        'user_id' => $userId, // ログインユーザーのIDを取得
        'published_at' => now(),
    ]);

    // タグの関連付け
    if ($request->tags) {
        $post->tags()->attach($request->tags);
    }

    return redirect()->route('dashboard')->with('success', '投稿が作成されました');
}

public function show($id)
{
    $post = Post::with(['comments', 'likes'])->findOrFail($id);
    return view('show', compact('post'));
}

public function like($id)
{
    $post = Post::findOrFail($id);

    // いいねをトグルする処理（例）
    $like = $post->likes()->where('user_id', auth()->id())->first();
    if ($like) {
        $like->delete();
    } else {
        $post->likes()->create(['user_id' => auth()->id()]);
    }

    return back();
}

public function comment(Request $request, $id)
{
    $request->validate([
        'comment' => 'required|string|max:255',
    ]);

    $post = Post::findOrFail($id);
    $post->comments()->create([
        'user_id' => auth()->id(),
        'body' => $request->comment,
    ]);

    return back();
}

    // 投稿の削除
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('dashboard');
    }
}
