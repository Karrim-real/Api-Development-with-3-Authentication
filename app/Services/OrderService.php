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

    public function updateOrder(int $OrderId, array $data)
    {
        return $this->OrderModel::whereId($OrderId)->update($data);
    }

    public function deleteOrder(int $OrderId)
    {
        return $this->OrderModel::destroy($OrderId);
    }

    public function checkIfOrderExists(int $Order)
    {
        return $this->OrderModel::where('id', $Order)->exists();
    }

    public function activeOrders( int $status){
        return $this->OrderModel::where('status', $status)->get();
    }

    public function countOrders(){
        return $this->OrderModel::all();
    }

    public function RecentFiveOrders() {
        return $this->OrderModel::latest()->take(5)->get();
    }

    public function TopOrders() {
        return $this->OrderModel::orderBy('total', 'desc')->take(5)->get();
    }
}
