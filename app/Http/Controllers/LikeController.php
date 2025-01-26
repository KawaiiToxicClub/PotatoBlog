<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    // いいねの保存
    public function store(Post $post)
    {
        $post->likes()->create([
            'user_id' => auth()->id(),
        ]);

        return back();
    }

    // いいねの削除
    public function destroy(Post $post)
    {
        $post->likes()->where('user_id', auth()->id())->delete();

        return back();
    }
}
