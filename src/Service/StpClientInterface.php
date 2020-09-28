<?php


namespace App\Service;


use App\ViewModel\StpClient;

interface StpClientInterface
{
    public function getStpClient (int $id): StpClient;
}