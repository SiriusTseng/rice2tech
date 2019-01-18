<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->delete();
        $users = factory(\App\Models\User::class, 50)->times(22)->make();
//        dd($users->makeVisible(['password','remember_token'])->toArray());
        DB::table('users')->insert($users->makeVisible(['password','remember_token'])->toArray());
//        factory(\App\Models\User::class, 50)->create()->each(function ($u) {
//            $u->save(factory(\App\Models\User::class)->make());
//        });


    }
}
