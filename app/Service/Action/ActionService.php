<?php

namespace App\Service\Action;

use App\Repositories\Action\ActionRepository;
use Illuminate\Support\Facades\DB;

class ActionService
{
    private $actionRepository;

    /**
     * @param ActionRepository $actionRepository
     */
    public function __construct(ActionRepository $actionRepository)
    {
        $this->actionRepository = $actionRepository;
    }

    /**
     * @param $field
     * @param $value
     * @param $operator
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function search($field, $value, $operator = "=")
    {
        return $this->actionRepository
            ->findBy($field, $value, $operator);
    }

    /**
     * @param array $params
     * @return \Exception|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function create(array $params)
    {
        try {
            DB::beginTransaction();
            $return = $this->actionRepository->create($params);
            DB::commit();
        }  catch (\Exception $exception){
            DB::rollBack();
            return $exception;
        }

        return $return;
    }
}
