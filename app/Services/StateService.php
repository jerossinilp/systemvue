<?php

namespace App\Services;

use App\Repositories\StateRepository;

class StateService
{
    protected $repository;

    public function __construct(StateRepository $stateRepository) {
        $this->repository = $stateRepository;
    }

    public function getStates()
    {
        return $this->repository->getAllStates();
    }
}
