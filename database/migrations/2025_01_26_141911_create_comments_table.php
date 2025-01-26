<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            // 'user_id' 外部キーを 'users' テーブルの 'id' カラムと関連付け
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // 'post_id' 外部キーを 'posts' テーブルの 'id' カラムと関連付け
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
