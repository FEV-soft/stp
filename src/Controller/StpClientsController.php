<?php


namespace App\Controller;


use App\Service\StpClientFakeGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StpClientsController extends AbstractController
{

    private const CLIENT_COUNT = 10;

    /**
     * @Route ("/clients", methods={"GET"}, name="app_clients")
     */

    public function listClients()
    {

        $stpClientList = [];

        for ($i = 0; $i < self::CLIENT_COUNT; ++$i) {
            $client = new StpClientFakeGenerator;
            $stpClientList[] = $client->getStpClient($i+1 )->getStpClientStringArray();
        }

        return $this->render('clients.html.twig', [ 'clients' => $stpClientList ] );
    }

}