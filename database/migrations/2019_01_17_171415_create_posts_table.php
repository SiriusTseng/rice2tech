<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->comment('标题');
            $table->text('content')->comment('内容');
            $table->string('desc')->default('')->comment('文章描述');
            $table->string('keywords')->default('')->comment('关键词');
            $table->string('tags')->default('')->comment('标签');
            $table->string('thumb')->default('')->comment('缩略图地址');
            $table->integer('reviewer_id')->default('0')->comment('审阅用户id(管理员id)');
            $table->string('author_type')->default('')->comment('投稿用户类型 AdminUser:管理员用户 User:普通用户');
            $table->integer('author_id')->default('0')->comment('投稿用户id(用户id)');
            $table->integer('hits')->default('0')->comment('点击次数');
            $table->integer('comment_totals')->default('0')->comment('评论数');
            $table->ipAddress('ip')->default('')->comment('发布文章用户的ip地址');
            $table->integer('backup_id')->default('0')->comment('文章已发布后编辑的副本id');
            $table->tinyInteger('on_top')->default('0')->comment('是否置顶');
            $table->tinyInteger('is_submit')->default('0')->comment('是否投稿');
            $table->tinyInteger('status')->default('0')->comment('文章状态');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
