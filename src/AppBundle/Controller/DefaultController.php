<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     */
    public function indexAction(Request $request)
    {
        return new JsonResponse("");
    }

    /**
     * @Route("/warehouse/{id}", name="warehouse")
     */
    public function warehouseAction(Request $request)
    {
        return new JsonResponse("");
    }

    /**
     * @Route("/warehouse/{warehouse_id}/shipments", name="shipment-list")
     */
    public function shipmentListAction(Request $request)
    {
        return new JsonResponse("");
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
     */
    public function orderListAction(Request $request)
    {
        return new JsonResponse("");
    }

    /**
     * @Route("/order/{id}", name="order")
     */
    public function orderAction(Request $request)
    {
        return new JsonResponse("");
    }

    /**
     * @Route("/admin-panel", name="admin-panel")
     */
    public function adminPaneltAction(Request $request)
    {
        return new JsonResponse("");
    }
}
