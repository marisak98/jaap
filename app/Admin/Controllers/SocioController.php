<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Socio;

class SocioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Socio';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Socio());

        $grid->column('id', __('Id'));
        $grid->column('PrimerNombre', __('PrimerNombre'));
        $grid->column('SegundoNombre', __('SegundoNombre'));
        $grid->column('PrimerApellido', __('PrimerApellido'));
        $grid->column('SegundoApellido', __('SegundoApellido'));
        $grid->column('Cedula', __('Cedula'));
        $grid->column('FechaNacimiento', __('FechaNacimiento'));
        $grid->column('Provincia', __('Provincia'));
        $grid->column('Canton', __('Canton'));
        $grid->column('Parroquia', __('Parroquia'));
        $grid->column('Barrio', __('Barrio'));
        $grid->column('CallePrincipal', __('CallePrincipal'));
        $grid->column('CalleSecundaria', __('CalleSecundaria'));
        $grid->column('NumeroCasa', __('NumeroCasa'));
        $grid->column('Referencia', __('Referencia'));
        $grid->column('Telefonofijo', __('Telefonofijo'));
        $grid->column('Celular', __('Celular'));
        $grid->column('Correo', __('Correo'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Socio::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('PrimerNombre', __('PrimerNombre'));
        $show->field('SegundoNombre', __('SegundoNombre'));
        $show->field('PrimerApellido', __('PrimerApellido'));
        $show->field('SegundoApellido', __('SegundoApellido'));
        $show->field('Cedula', __('Cedula'));
        $show->field('FechaNacimiento', __('FechaNacimiento'));
        $show->field('Provincia', __('Provincia'));
        $show->field('Canton', __('Canton'));
        $show->field('Parroquia', __('Parroquia'));
        $show->field('Barrio', __('Barrio'));
        $show->field('CallePrincipal', __('CallePrincipal'));
        $show->field('CalleSecundaria', __('CalleSecundaria'));
        $show->field('NumeroCasa', __('NumeroCasa'));
        $show->field('Referencia', __('Referencia'));
        $show->field('Telefonofijo', __('Telefonofijo'));
        $show->field('Celular', __('Celular'));
        $show->field('Correo', __('Correo'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Socio());

        $form->text('PrimerNombre', __('PrimerNombre'));
        $form->text('SegundoNombre', __('SegundoNombre'));
        $form->text('PrimerApellido', __('PrimerApellido'));
        $form->text('SegundoApellido', __('SegundoApellido'));
        $form->text('Cedula', __('Cedula'));
        $form->date('FechaNacimiento', __('FechaNacimiento'))->default(date('Y-m-d'));
        $form->text('Provincia', __('Provincia'));
        $form->text('Canton', __('Canton'));
        $form->text('Parroquia', __('Parroquia'));
        $form->text('Barrio', __('Barrio'));
        $form->text('CallePrincipal', __('CallePrincipal'));
        $form->text('CalleSecundaria', __('CalleSecundaria'));
        $form->number('NumeroCasa', __('NumeroCasa'));
        $form->text('Referencia', __('Referencia'));
        $form->text('Telefonofijo', __('Telefonofijo'));
        $form->text('Celular', __('Celular'));
        $form->text('Correo', __('Correo'));

        return $form;
    }
}
