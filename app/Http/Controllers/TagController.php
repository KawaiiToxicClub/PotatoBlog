<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // タグの一覧表示
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    // タグの作成
    public function create()
    {
        return view('tags.create');
    }

    // タグの保存
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:tags,name'
        ]);

        Tag::create([
            'name' => $request->name
        ]);

        return redirect()->route('tags.index');
    }

    // タグの編集
    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    // タグの更新
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:tags,name,' . $tag->id
        ]);

        $tag->update([
            'name' => $request->name
        ]);

        return redirect()->route('tags.index');
    }

    // タグの削除
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }
}
