<?php

use Illuminate\Database\Seeder;

class AdminPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_permissions')->delete();
        
        \DB::table('admin_permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '所有权限',
                'slug' => '*',
                'http_method' => '',
                'http_path' => '*',
                'created_at' => NULL,
                'updated_at' => '2019-01-17 09:53:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '仪表盘访问权限',
                'slug' => 'dashboard',
                'http_method' => 'GET',
                'http_path' => '/',
                'created_at' => NULL,
                'updated_at' => '2019-01-17 09:54:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '登录登出权限',
                'slug' => 'auth.login',
                'http_method' => '',
                'http_path' => '/auth/login
/auth/logout',
                'created_at' => NULL,
                'updated_at' => '2019-01-17 09:54:18',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '用户设置权限',
                'slug' => 'auth.setting',
                'http_method' => 'GET,PUT',
                'http_path' => '/auth/setting',
                'created_at' => NULL,
                'updated_at' => '2019-01-17 09:54:35',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '角色权限管理',
                'slug' => 'auth.management',
                'http_method' => '',
                'http_path' => '/auth/roles
/auth/permissions
/auth/menu
/auth/logs',
                'created_at' => NULL,
                'updated_at' => '2019-01-17 09:55:02',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '管理员配置',
                'slug' => 'auth.users',
                'http_method' => '',
                'http_path' => '/auth/users',
                'created_at' => '2019-01-17 09:55:40',
                'updated_at' => '2019-01-17 09:56:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '高级配置',
                'slug' => 'AdvanceOption',
                'http_method' => '',
                'http_path' => NULL,
                'created_at' => '2019-01-17 10:04:18',
                'updated_at' => '2019-01-17 10:04:18',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Admin helpers',
                'slug' => 'ext.helpers',
                'http_method' => NULL,
                'http_path' => '/helpers/*',
                'created_at' => '2019-01-17 10:06:00',
                'updated_at' => '2019-01-17 10:06:00',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Exceptions reporter',
                'slug' => 'ext.reporter',
                'http_method' => NULL,
                'http_path' => '/exceptions*',
                'created_at' => '2019-01-17 10:12:48',
                'updated_at' => '2019-01-17 10:12:48',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Backup',
                'slug' => 'ext.backup',
                'http_method' => NULL,
                'http_path' => '/backup*',
                'created_at' => '2019-01-17 10:14:13',
                'updated_at' => '2019-01-17 10:14:13',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Redis Manager',
                'slug' => 'ext.redis-manager',
                'http_method' => NULL,
                'http_path' => '/redis*',
                'created_at' => '2019-01-17 10:15:07',
                'updated_at' => '2019-01-17 10:15:07',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Media manager',
                'slug' => 'ext.media-manager',
                'http_method' => NULL,
                'http_path' => '/media*',
                'created_at' => '2019-01-17 10:15:44',
                'updated_at' => '2019-01-17 10:15:44',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Api tester',
                'slug' => 'ext.api-tester',
                'http_method' => NULL,
                'http_path' => '/api-tester*',
                'created_at' => '2019-01-17 10:17:03',
                'updated_at' => '2019-01-17 10:17:03',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Admin Config',
                'slug' => 'ext.config',
                'http_method' => NULL,
                'http_path' => '/config*',
                'created_at' => '2019-01-17 10:18:23',
                'updated_at' => '2019-01-17 10:18:23',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Admin Configx',
                'slug' => 'ext.configx',
                'http_method' => NULL,
                'http_path' => '/configx/*',
                'created_at' => '2019-01-17 10:20:02',
                'updated_at' => '2019-01-17 10:20:02',
            ),
        ));
        
        
    }
}