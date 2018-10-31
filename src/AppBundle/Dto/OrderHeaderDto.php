<?php

namespace AppBundle\Dto;

class OrderHeaderDto
{
    public $id;

    public $shipmentId;

    public $warehouseId;

    public $status;

    public $address;

    public $isReturn;

    public function setShipmentId(int $shipmentId): OrderHeaderDto
    {
        $this->shipmentId = $shipmentId;
        return $this;
    }

    public function setWarehouseId(int $warehouseId): OrderHeaderDto
    {
        $this->warehouseId= $warehouseId;
        return $this;
    }

    public function setStatus(int $status): OrderHeaderDto
    {
        $this->status = $status;
        return $this;
    }

    public function setAddress(string $address): OrderHeaderDto
    {
        $this->address = $address;
        return $this;
    }

    public function setIsReturn(int $isReturn): OrderHeaderDto
    {
        $this->isReturn = $isReturn;
        return $this;
    }
}