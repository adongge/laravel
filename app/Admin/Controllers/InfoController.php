<?php

namespace App\Admin\Controllers;

use App\Models\Info;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class InfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Info(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('unit');
            $grid->column('used');
            $grid->column('remain');
            $grid->column('desc');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Info(), function (Show $show) {
            $show->field('id');
            $show->field('unit');
            $show->field('used');
            $show->field('remain');
            $show->field('desc');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Info(), function (Form $form) {
            $form->display('id');
            $form->text('unit');
            $form->number('used');
            $form->number('remain');
            $form->textarea('desc');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
