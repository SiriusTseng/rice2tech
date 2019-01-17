<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => '仪表盘',
                'icon' => 'fa-dashboard',
                'uri' => '/',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-01-17 09:52:15',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => '系统管理',
                'icon' => 'fa-tasks',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-01-17 09:53:00',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => '管理员管理',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-01-17 10:00:01',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 4,
                'title' => '角色管理',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-01-17 10:00:09',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 5,
                'title' => '权限管理',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-01-17 10:00:20',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 6,
                'title' => '菜单管理',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-01-17 10:00:34',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 7,
                'title' => '操作日志',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-01-17 10:00:45',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 8,
                'title' => '高级配置',
                'icon' => 'fa-gears',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2019-01-17 10:04:48',
                'updated_at' => '2019-01-17 10:10:33',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 8,
                'order' => 11,
                'title' => '高级管理助手',
                'icon' => 'fa-gear',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2019-01-17 10:06:00',
                'updated_at' => '2019-01-17 10:20:21',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 9,
                'order' => 12,
                'title' => '模型生成',
                'icon' => 'fa-keyboard-o',
                'uri' => 'helpers/scaffold',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:06:00',
                'updated_at' => '2019-01-17 10:20:21',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 9,
                'order' => 13,
                'title' => '数据库终端',
                'icon' => 'fa-database',
                'uri' => 'helpers/terminal/database',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:06:00',
                'updated_at' => '2019-01-17 10:20:21',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 9,
                'order' => 15,
                'title' => 'Laravel artisan',
                'icon' => 'fa-terminal',
                'uri' => 'helpers/terminal/artisan',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:06:00',
                'updated_at' => '2019-01-17 10:20:21',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 9,
                'order' => 14,
                'title' => '路由查看',
                'icon' => 'fa-list-alt',
                'uri' => 'helpers/routes',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:06:00',
                'updated_at' => '2019-01-17 10:20:21',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 8,
                'order' => 16,
                'title' => '异常记录',
                'icon' => 'fa-bug',
                'uri' => 'exceptions',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:12:48',
                'updated_at' => '2019-01-17 10:20:21',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 8,
                'order' => 18,
                'title' => '备份',
                'icon' => 'fa-copy',
                'uri' => 'backup',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:14:13',
                'updated_at' => '2019-01-17 10:20:21',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 8,
                'order' => 19,
                'title' => 'Redis管理',
                'icon' => 'fa-database',
                'uri' => 'redis',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:15:07',
                'updated_at' => '2019-01-17 10:20:21',
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 0,
                'order' => 21,
                'title' => '媒体管理',
                'icon' => 'fa-picture-o',
                'uri' => 'media',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:15:44',
                'updated_at' => '2019-01-17 10:21:23',
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 8,
                'order' => 17,
                'title' => 'API测试',
                'icon' => 'fa-sliders',
                'uri' => 'api-tester',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:17:03',
                'updated_at' => '2019-01-17 10:20:21',
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 8,
                'order' => 9,
                'title' => '配置文件',
                'icon' => 'fa-toggle-on',
                'uri' => 'config',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:18:23',
                'updated_at' => '2019-01-17 10:20:29',
            ),
            19 => 
            array (
                'id' => 20,
                'parent_id' => 8,
                'order' => 10,
                'title' => '分组配置文件',
                'icon' => 'fa-toggle-on',
                'uri' => 'configx/edit',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:20:02',
                'updated_at' => '2019-01-17 10:20:39',
            ),
            20 => 
            array (
                'id' => 21,
                'parent_id' => 8,
                'order' => 20,
                'title' => '环境变量管理',
                'icon' => 'fa-gears',
                'uri' => 'env-manager',
                'permission' => NULL,
                'created_at' => '2019-01-17 10:21:15',
                'updated_at' => '2019-01-17 10:21:35',
            ),
        ));
        
        
    }
}