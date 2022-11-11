<?php

namespace App\Service;

use App\Models\Order;


/**
 * this service handles the CRUD operations for orders 
 */
class OrderService
{

    /**
     * get an order by its Id
     *
     * @param integer $id
     * @return Order
     */
    public function fetchOrderById(int $id)
    {
        $order = Order::find($id);

        return $order;
    }

    /**
     * get all orders
     *
     * @return Order[]
     */
    public function fetchAll()
    {
        $orders = Order::all();

        return $orders;
    }


    /**
     * store an order to the DB
     *
     * @param $orderData
     * @return Order
     */
    public function storeOrder($orderData)
    {
        return  Order::create($orderData);
    }
}
