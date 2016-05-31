<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:42
 */

namespace app\Http\Repositories;
use app\Entities\User;

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User;
    }

    public function ListAndPaginate($paginate = 50, $search = null)
    {
        $qry = $this->model->orderBy('name')
            ->paginate($paginate);

        return $qry;
    }

    public function listing()
    {
        $qry = $this->model->orderBy('name')
            ->list();

        return $qry;
    }




}