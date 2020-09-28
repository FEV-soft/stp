<?php


namespace App\Controller;


use App\Service\StpOrderFakeGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StpOrdersController extends AbstractController
{
    private const ORDER_COUNT = 5;

    /**
     * @Route ("/orders", methods={"GET"}, name="app_orders")
     */

    public function listOrders()
    {

        $stpOrdersList = [];

        for ($i = 0; $i < self::ORDER_COUNT; ++$i) {
            $order = new StpOrderFakeGenerator();
            $stpOrdersList[] = $order->getStpOrder($i+1 )->getStpOrderStringArray();
        }

        return $this->render('orders.html.twig', [ 'orders' => $stpOrdersList ] );
    }

}