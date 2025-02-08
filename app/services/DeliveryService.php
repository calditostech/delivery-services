<?php

namespace App\Services;

use App\Models\Delivery;

class DeliveryService
{
    public function create(array $data)
    {
        return Delivery::create($data);
    }

    public function update(Delivery $delivery, array $data)
    {
        return $delivery->update($data);
    }

    // Outros métodos conforme necessário...
}
