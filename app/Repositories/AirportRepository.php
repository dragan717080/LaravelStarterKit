<?php

namespace App\Repositories;

use App\Models\Airport;
use App\Repositories\Traits\{ GetByIdTrait, DeleteTrait };

class AirportRepository
{
    use GetByIdTrait;
    use DeleteTrait;

    public $model;

    public function __construct()
    {
        $this->model = new Airport();
    }

    public function getAll()
    {
        return Airport::all();
    }

    public function update(
        string $id,
        ?string $name, 
        ?string $city, 
        ?string $country
    )
    {
        $airport = $this->model->find($id);
    }

    public function create(
        string $name, 
        string $city, 
        string $country
    )
    {

    }
}
