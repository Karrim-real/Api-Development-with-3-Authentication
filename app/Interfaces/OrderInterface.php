<?php

namespace App\Interfaces;

interface OrderInterface
{
    /**
     * createOrder
     *
     * @param  mixed $data
     * @return void
     */
    public function createOrder(array $data);
    /**
     * Orders
     *
     * @return void
     */
    public function Orders();
    /**
     * Order
     *
     * @param  mixed $OrderId
     * @return void
     */
    public function Order(int $OrderId);
    /**
     * UpdateOrder
     *
     * @param  mixed $OrderId
     * @param  mixed $data
     * @return void
     */
    public function UpdateOrder(int $OrderId, array $data);
    /**
     * deleteOrder
     *
     * @param  mixed $OrderId
     * @return void
     */
    public function deleteOrder(int $OrderId);
    /**
     * checkIfOrderExists
     *
     * @param  mixed $OrderId
     * @return void
     */
    public function checkIfOrderExists(int $OrderId);


}
