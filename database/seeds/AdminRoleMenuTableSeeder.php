<?php

use Illuminate\Database\Seeder;

class AdminRoleMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_role_menu')->delete();
        
        \DB::table('admin_role_menu')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'menu_id' => 2,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            1 => 
            array (
                'role_id' => 1,
                'menu_id' => 3,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            2 => 
            array (
                'role_id' => 2,
                'menu_id' => 3,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            3 => 
            array (
                'role_id' => 2,
                'menu_id' => 2,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            4 => 
            array (
                'role_id' => 1,
                'menu_id' => 4,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            5 => 
            array (
                'role_id' => 2,
                'menu_id' => 4,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            6 => 
            array (
                'role_id' => 1,
                'menu_id' => 5,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            7 => 
            array (
                'role_id' => 2,
                'menu_id' => 5,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            8 => 
            array (
                'role_id' => 1,
                'menu_id' => 6,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            9 => 
            array (
                'role_id' => 2,
                'menu_id' => 6,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            10 => 
            array (
                'role_id' => 1,
                'menu_id' => 7,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            11 => 
            array (
                'role_id' => 2,
                'menu_id' => 7,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            12 => 
            array (
                'role_id' => 1,
                'menu_id' => 8,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            13 => 
            array (
                'role_id' => 3,
                'menu_id' => 8,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            14 => 
            array (
                'role_id' => 1,
                'menu_id' => 17,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            15 => 
            array (
                'role_id' => 2,
                'menu_id' => 17,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
            16 => 
            array (
                'role_id' => 3,
                'menu_id' => 17,
                'created_at' => '2019-01-17 10:24:39',
                'updated_at' => '2019-01-17 10:24:39',
            ),
        ));
        
        
    }
}