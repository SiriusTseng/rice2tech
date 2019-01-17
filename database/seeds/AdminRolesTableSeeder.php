<?php

use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_roles')->delete();
        
        \DB::table('admin_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '系统管理员',
                'slug' => 'Administrator',
                'created_at' => '2019-01-17 09:30:49',
                'updated_at' => '2019-01-17 10:03:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '普通管理员',
                'slug' => 'Manager',
                'created_at' => '2019-01-17 09:59:26',
                'updated_at' => '2019-01-17 10:03:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '高级管理员',
                'slug' => 'AdvanceManager',
                'created_at' => '2019-01-17 10:03:13',
                'updated_at' => '2019-01-17 10:03:13',
            ),
        ));
        
        
    }
}