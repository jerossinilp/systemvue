<?php

namespace App\Repositories;

use App\Models\Models\State;

class StateRepository
{
    protected $entity;

    public function __construct(State $state) {
        $this->entity = $state;
    }

    public function getAllStates()
    {
        return $this->entity->get();
    }
}
