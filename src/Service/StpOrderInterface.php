<?php


namespace App\Service;


use App\ViewModel\StpOrder;

interface StpOrderInterface
{
    public function getStpOrder (int $id): StpOrder;
}