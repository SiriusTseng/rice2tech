<?php
/**
 * Created by PhpStorm.
 * User: Sirius
 * Date: 2019/1/18
 * Time: 16:50
 */

namespace App\Models;


use Encore\Admin\Auth\Database\Administrator;

class AdminUser extends Administrator
{

    public function post(){
        return $this->morphOne(Post::class,'author');
    }
}
