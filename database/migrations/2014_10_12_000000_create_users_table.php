<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->comment('用户名');
            $table->string('password')->comment('密码');
            $table->string('email')->unique();
            $table->string('avatar')->default('')->comment('头像路径');
            $table->string('intro')->default('')->comment('自我介绍');
            $table->string('mini_program_id')->default('')->comment('小程序open_id');
            $table->string('official_account_id')->default('')->comment('公众号open_id');
            $table->string('union_id')->default('')->comment('微信开放平台union_id');
            $table->string('tel')->default('')->comment('电话号码');
            $table->ipAddress('register_ip')->default('')->comment('注册时的ip');
            $table->ipAddress('last_login_ip')->default('')->comment('最后登录时的ip');
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
