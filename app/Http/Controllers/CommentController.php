<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // コメントの保存
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required|string|max:500', // 文字数制限を追加
        ]);

        $post->comments()->create([
            'body' => $request->body,
            'user_id' => auth()->id(),
        ]);

        return redirect()
            ->route('posts.show', $post)
            ->with('success', 'コメントを投稿しました！');
    }

    // コメントの削除
    public function destroy(Comment $comment)
    {
        // 自分のコメントかどうかを確認
        if ($comment->user_id !== auth()->id()) {
            return back()->with('error', '他人のコメントを削除することはできません。');
        }

        $comment->delete();

        return back()->with('success', 'コメントを削除しました。');
    }
}
