<?php

namespace AppBundle\Dto;

class ShipmentDto
{
    public $id;

    public $warehouseId;

    public $status;

    public function setWarehouseId(int $warehouseId): ShipmentDto
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }

    public function setStatus(int $status): ShipmentDto
    {
        $this->status = $status;
        return $this;
    }

}