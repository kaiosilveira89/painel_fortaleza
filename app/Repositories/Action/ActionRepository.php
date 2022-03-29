<?php

namespace App\Repositories\Action;

use App\Contracts\Repository\AbstractRepository;
use App\Models\Action;

class ActionRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(Action::class);
    }

    /**
     * @param $field
     * @param $value
     * @param $operator
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function findBy($field, $value, $operator = "="){
        return $this->getModel()::where($field, $operator, $value)->get();
    }
}
