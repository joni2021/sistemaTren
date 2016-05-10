<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:39
 */

namespace app\Http\Repositories;
use app\Entities\Persona;

abstract class BaseRepo {

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public abstract function getModel();

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($datos)
    {
        return $this->model->create($datos);
    }

    public function edit($model, $datos)
    {
        $model->fill($datos);
        $model->save();

        return $model;
    }

    public function listsCombo($data, $id)
    {
        return $this->model->lists($data, $id);
    }



}