<?php


namespace App\Service;


use App\ViewModel\StpOrder;

interface StpOrdersListInterface
{
    public function getListStpOrder (): StpOrder;

}