<?php

declare(strict_types = 1);

namespace App\Services;

use App\Interfaces\{ ReadInterface, DeleteInterface };
use App\Interfaces\Airport\{ CreateInterface, UpdateInterface };

class AirportService implements CreateInterface,
    ReadInterface, UpdateInterface, DeleteInterface
{
    public function getAll()
    {
        return "Hey!";
    }

    public function getById(string $id)
    {
        return "Hey!";
    }

    public function create(string $name, string $city, string $country)
    {
        return "Hey!";
    }

    public function update(string $id, ?string $name, ?string $city, string $country)
    {
        return "Hey!";
    }

    public function delete(string $id)
    {
        return "Hey!";
    }
}
