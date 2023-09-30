<?php

namespace App\Services;

use App\Interfaces\OrderListInterface;
use App\Models\OrderItem;
use App\Models\OrderList;

class OrderListService implements OrderListInterface
{
    protected $OrderListModel;

    public function __construct(OrderItem $OrderList) {
        $this->OrderListModel = $OrderList;
    }

    /**
     * createOrderList
     *
     * @param  mixed $data
     * @return void
     */
    public function createOrderList(array $data)
    {
        return $this->OrderListModel::create($data);
    }

    public function OrderLists()
    {
        return $this->OrderListModel::latest()->simplePaginate(15);
    }

    /**
     * OrderList
     *
     * @param  mixed $OrderListId
     * @return object
     */
    public function OrderList(int $OrderListId)
    {

        return $this->OrderListModel::findOrFail($OrderListId);
    }

    /**
     * updateOrderList
     *
     * @param  mixed $OrderListId
     * @param  mixed $data
     * @return void
     */
    public function updateOrderList(int $OrderListId, array $data)
    {
        return $this->OrderListModel::whereId($OrderListId)->update($data);
    }

    /**
     * deleteOrderList
     *
     * @param  mixed $OrderListId
     * @return void
     */
    public function deleteOrderList(int $OrderListId)
    {
        return $this->OrderListModel::destroy($OrderListId);
    }

    /**
     * checkIfOrderListExists
     *
     * @param  mixed $OrderList
     * @return void
     */
    public function checkIfOrderListExists(int $OrderList)
    {
        return $this->OrderListModel::where('id', $OrderList)->exists();
    }

    /**
     * activeOrderLists
     *
     * @param  mixed $status
     * @return void
     */
    public function activeOrderLists( int $status){
        return $this->OrderListModel::where('status', $status)->get();
    }

    /**
     * OrderListByReference
     *
     * @param  mixed $reference
     * @return void
     */
    public function OrderListByReference($reference)  {
        return $this->OrderListModel::where('reference', $reference)->get();
    }
}
