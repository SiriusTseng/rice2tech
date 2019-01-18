<?php

namespace App\Models;

use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Controllers\UserController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    public const STATUS = [
        'submited'   => 1, //投稿
        'accepted'   => 2, //接受投稿
        'rejected'   => 3, //回绝投稿
        'revisioned' => 4, //修订的
        'published'  => 5, //发布的
        'deleted'    => 6, //删除的
    ];

    public const ONTOP = [
        true  => 1,
        false => 0,
    ];

    public const IS_SUBMIT = [
        true  => 1,
        false => 0,
    ];

    public const AUTHOR_TYPE = [
        'admin' => 'App\Models\AdminUser',
        'user'  => 'App\Models\User',
    ];

    public function author()
    {
        return $this->morphTo();
    }
}
