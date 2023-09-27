<?php

namespace App\Interfaces;

interface OrderListInterface
{
    /**
     * createOrderList
     *
     * @param  mixed $data
     * @return void
     */
    public function createOrderList(array $data);
    /**
     * OrderLists
     *
     * @return void
     */
    public function OrderLists();
    /**
     * OrderList
     *
     * @param  mixed $OrderListId
     * @return void
     */
    public function OrderList(int $OrderListId);
    /**
     * UpdateOrderList
     *
     * @param  mixed $OrderListId
     * @param  mixed $data
     * @return void
     */
    public function UpdateOrderList(int $OrderListId, array $data);
    /**
     * deleteOrderList
     *
     * @param  mixed $OrderListId
     * @return void
     */
    public function deleteOrderList(int $OrderListId);
    /**
     * checkIfOrderListExists
     *
     * @param  mixed $OrderListId
     * @return void
     */
    public function checkIfOrderListExists(int $OrderListId);


}
