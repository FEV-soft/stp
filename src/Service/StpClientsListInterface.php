<?php


namespace App\Service;


use App\ViewModel\StpClient;

interface StpClientsListInterface
{
    public function getListStpClients (): StpClient;
}