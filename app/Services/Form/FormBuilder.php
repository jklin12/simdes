<?php

namespace App\Services\Form;

class FormBuilder
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function table($data,$detail = 0, $classTable = 'table-striped', $routeDetail = '', $routeEdit = '', $routeDelete = '')
    {
        $table = '<table class="table ' . $classTable . '" id="dataTable" width="100%" cellspacing="0">';

        $table .= '<thead><tr>';
        $table .= '<th>No</th>';
        foreach ($this->model->field as $key => $value) {
            $table .= '<th>' . $value['label'] . '</th>';
        }
        $table .= '<th colspan="' . ($detail ? 3 : 2) . '" class="text-center">Action</th>';
        $table .= '</tr></thead>';
        $table .= '<tbody>';
        //dd($this->model->getFillable()[1]);
        $i = 1;
        foreach ($data->toArray()['data'] as $key => $value) {
            //dd($this->model->getFillable[1]);
            $table .= '<tr>';
            $table .= '<td>' . ($data->firstItem() + $i) - 1 . '</td>';
            foreach ($this->model->field as $kfield => $vfield) {
                $table .= '<td>' . $value[$kfield] . '</td>';
            }
            $i++;
            $table .= '<td class="text-center">';
            $table .= '<a href="'.route($routeEdit,$value[$this->model->getKeyName()]).'" class="btn btn-success btn-sm">';
            $table .= '<i class="fa fa-edit"></i>';
            $table .= '</a>';
            $table .= '</td>';
            $table .= '<td class="text-center">';
            $table .= '<a href="" class="btn btn-danger btn-sm delete-btn" data-toggle="modal" data-target="#delete-modal" data-route="'.route($routeDelete,$value[$this->model->getKeyName()]).'" data-name="'.$value[$this->model->getFillable()[1]].'">';
            $table .= '<i class="fa fa-trash"></i>';
            $table .= '</a>';
            $table .= '</td>';

            $table .= '</tr>';
        }
        $table .= '</tbody>';

        $table .= '</table>';
        $table .= $data->links();

        return $table;
    }

    public function formCreate($route, $method = '')
    {
        $form = '<form action="' . $route . '" method="post">';
        $form .= '<input type="hidden"  name="_token" value="' . csrf_token() . '" >';
        if ($method) {
            $form .= '<input type="hidden"  name="method" value="' . $method . '" >';
        }

        foreach ($this->model->field as $key => $value) {
            $form .=  '<div class="form-group"><label for="input_tgl_pulang">' . $value['form_label'] . '</label>';
            if ($value['form_type'] == 'date') {
                $form .= '<div class="datepicker date input-group">';
                $form .= '<input type="text" class="form-control" id="input_' . $key . '" placeholder="Masukan ' . $value['form_label'] . '" name="' . $key . '" value="" >';
                $form .= '<div class="input-group-append">';
                $form .= '<span class="input-group-text"><i class="fa fa-calendar"></i></span>';
                $form .= '</div>';
                $form .= '</div>';
            } else if ($value['form_type'] == 'select') {

                $form .= '<select class="form-control" id="input_' . $key . '" name="' . $key . '" >';
                $form .= '<option value="">-- Pilih ' . $value['form_label'] . ' --</option>';
                foreach ($value['keyvaldata'] as $kdata => $vdata) {
                    //dd($vdata);
                    $form .= '<option value="' . $vdata . '">' . $vdata . '</option>';
                }
                $form .= '</select>';
            } else {
                $form .= '<input type="text" class="form-control" id="input_' . $key . '" placeholder="Masukan ' . $value['form_label'] . '" name="' . $key . '" value="" >';
            }
            $form .= '</div>';
        }
        $form .= '<div class="d-sm-flex justify-content-center mb-2"><button class="btn btn-primary btn-icon-split " type="submit"><span class="icon text-white-50"><i class="fas fa-check"></i></span><span class="text">Simpan</span></button></div>';
        $form .= '</form>';
        return $form;
    }
}
