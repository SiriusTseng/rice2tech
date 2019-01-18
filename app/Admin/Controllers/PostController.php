<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class PostController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('列表')
            ->description('文章')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('详情')
            ->description('文章')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑')
            ->description('文章')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('创建')
            ->description('文章')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post);

        $grid->id('编号');
        $grid->title('标题');
        $grid->author()->username('作者名');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Post::findOrFail($id));

        $show->id('ID');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post);
        $form->text('title', '标题');
        $form->editor('content', '内容');

        $authorType = [
            Post::AUTHOR_TYPE['admin'] => '管理员',
            Post::AUTHOR_TYPE['user']  => '用户',
        ];
        $form->select('author_type', '作者类型')->options($authorType);
        $form->number('author_id', '用户id')->default(Admin::user()->id);
        $form->display('Created at', '创建时间')->default(date('Y-m-d h:i:s'));
        $form->display('Updated at', '更新时间')->default(date('Y-m-d h:i:s'));


        $form->saving(function ($form) {
            dd($form);
//            $form->author_type = Post::AUTHOR_TYPE['admin'];
//            $form->author_id = Admin::user()->id;
//            dd($form);
        });

        return $form;
    }
}
