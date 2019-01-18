<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('仪表盘')
            ->description(' ')
            ->row(view('admin.dashboard.title'))
            ->row(function (Row $row) {
                $row->column(4, function (Column $column) {
//                    $column->append(Dashboard::extensions());
                });
                $row->column(4, function (Column $column) {
                    $column->append($this->enviroment());
                });

                $row->column(4, function (Column $column) {
                    $column->append($this->dependencies());
                });
            });
    }

    protected function enviroment()
    {
        $envs = [
            ['name' => 'PHP版本', 'value' => 'PHP/' . PHP_VERSION],
            ['name' => 'Laravel版本', 'value' => app()->version()],
            ['name' => 'CGI', 'value' => php_sapi_name()],
            ['name' => '系统用户名', 'value' => php_uname()],
            ['name' => 'Web服务器', 'value' => array_get($_SERVER, 'SERVER_SOFTWARE')],

            ['name' => '缓存驱动', 'value' => config('cache.default')],
            ['name' => '会话驱动', 'value' => config('session.driver')],
            ['name' => '队列驱动', 'value' => config('queue.default')],

            ['name' => '时区', 'value' => config('app.timezone')],
            ['name' => '地域', 'value' => config('app.locale')],
            ['name' => 'Env', 'value' => config('app.env')],
            ['name' => 'URL', 'value' => config('app.url')],
        ];

        return view('admin.dashboard.env', compact('envs'));

    }

    protected function dependencies()
    {
        $json = file_get_contents(base_path('composer.json'));

        $dependencies = json_decode($json, true)['require'];

        return view('admin.dashboard.dependencies', compact('dependencies'));
    }
}
