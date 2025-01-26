<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Webアプリケーション用のルートを登録します。
| すべてのルートは "web" ミドルウェアグループに割り当てられます。
|
*/

Route::get('/', function () {
    return view('index');
});

// ダッシュボード（投稿一覧）
Route::get('/dashboard', [PostController::class, 'top'])
    ->middleware('auth')
    ->name('dashboard');

// 認証済みユーザー専用のルート
Route::middleware('auth')->group(function () {
    // 投稿関連のルート
    Route::get('list', [PostController::class, 'list'])->name('list'); // 投稿一覧
    Route::resource('comments', CommentController::class)->only(['store', 'update', 'destroy']);
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('show');
    Route::get('create', [PostController::class, 'create'])->name('create');
    Route::post('/posts', [PostController::class, 'store'])->name('store');

    Route::post('/posts/{id}/like', [PostController::class, 'like'])->name('like');
    Route::post('/posts/{id}/comment', [PostController::class, 'comment'])->name('comment');
});

// 認証ルート
require __DIR__.'/auth.php';
