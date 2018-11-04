<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     */
    public function indexAction(Request $request)
    {
        $warehouses = [
            [
                'id' => 1,
                'name' => 'Baneasa'
            ],
            [
                'id' => 2,
                'name' => 'Crangasi'
            ],
        ];
        return $this->render('niceAdminBootstrap/index.twig', [
            'warehouses' => $warehouses
        ]);
    }

    /**
     * @Route("/warehouse/{id}", name="warehouse")
     */
    public function warehouseAction(Request $request)
    {
        return new JsonResponse('');
    }

    /**
     * @Route("/warehouse/{warehouse_id}/shipments", name="shipment-list")
     */
    public function shipmentListAction(Request $request)
    {
        $shipments = [];
        return $this->render('niceAdminBootstrap/shipments.html.twig', [
            'parent_warehouse' => 1,
           'shipments' => $shipments
        ]);
    }

    /**
     * @Route("/shipment/{id}", name="shipment")
     */
    public function shipmentAction(Request $request)
    {
        return new JsonResponse("");
    }

    /**
     * @Route("/warehouse/{warehouse_id}/orders", name="orders-list")
     * @Route("/warehouse/{warehouse_id}/shipment/{shipment_id}/orders", name="shipment-orders-list")
     */
    public function orderListAction(Request $request)
    {
        $orders = [];
        return $this->render('niceAdminBootstrap/orders.html.twig', [
            'parent_shipment'  => $request->get('shipment_id'),
            'parent_warehouse' => $request->get('shipment_id'),
            'orders'           => $orders
        ]);
    }

    /**
     * @Route("/order/{id}", name="order")
     */
    public function orderAction(Request $request)
    {
        return new JsonResponse("");
    }

    /**
     * @Route("/panel", name="admin-panel")
     */
    public function adminPaneltAction(Request $request)
    {
//        $form = new Form();
        return $this->render('niceAdminBootstrap/params.html.twig');
    }
}
