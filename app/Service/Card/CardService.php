<?php

namespace App\Service\Card;

use App\Repositories\Action\ActionRepository;

class CardService
{
    private $actionRepository;

    /**
     * @param ActionRepository $actionRepository
     */
    public function __construct(ActionRepository $actionRepository)
    {
        $this->actionRepository = $actionRepository;
    }

}
