<?php

namespace App\Services;

use App\Interfaces\OrderInterface;
use App\Models\Order;

class OrderService implements OrderInterface
{
    protected $OrderModel;

    public function __construct(Order $Order) {
        $this->OrderModel = $Order;
    }

    /**
     * createOrder
     *
     * @param  mixed $data
     * @return void
     */
    public function createOrder(array $data)
    {
        return $this->OrderModel::create($data);
    }

    public function Orders()
    {
        return $this->OrderModel::latest()->simplePaginate(15);
    }

    /**
     * Order
     *
     * @param  mixed $OrderId
     * @return object
     */
    public function Order(int $OrderId)
    {

        return $this->OrderModel::findOrFail($OrderId);
    }

    /**
     * updateOrder
     *
     * @param  mixed $OrderId
     * @param  mixed $data
     * @return void
     */
    public function updateOrder(int $OrderId, array $data)
    {
        return $this->OrderModel::whereId($OrderId)->update($data);
    }

    /**
     * deleteOrder
     *
     * @param  mixed $OrderId
     * @return void
     */
    public function deleteOrder(int $OrderId)
    {
        return $this->OrderModel::destroy($OrderId);
    }

    /**
     * checkIfOrderExists
     *
     * @param  mixed $Order
     * @return void
     */
    public function checkIfOrderExists(int $Order)
    {
        return $this->OrderModel::where('id', $Order)->exists();
    }

    /**
     * activeOrders
     *
     * @param  mixed $status
     * @return void
     */
    public function activeOrders( int $status){
        return $this->OrderModel::where('status', $status)->get();
    }

    /**
     * countOrders
     *
     * @return void
     */
    public function countOrders(){
        return $this->OrderModel::all();
    }

    /**
     * RecentFiveOrders
     *
     * @return void
     */
    public function RecentFiveOrders() {
        return $this->OrderModel::latest()->take(5)->get();
    }

    /**
     * TopOrders
     *
     * @return void
     */
    public function TopOrders() {
        return $this->OrderModel::orderBy('total', 'desc')->take(5)->get();
    }
}
