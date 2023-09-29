<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\OrderListService;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;
    protected $orderListService;

    public function __construct(OrderService $orderService, OrderListService $orderListService) {
        $this->orderService = $orderService;
        $this->orderListService = $orderListService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = $this->orderService->Orders();
        $NumberOfOrders = $this->orderService->countOrders();

        return view('backend.orders.index', compact('orders', 'NumberOfOrders'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = $this->orderService->Order($id);
        $orderLists = $this->orderListService->OrderListByReference($order->reference);
        // dd($orderLists);
        return view('backend.orders.edit', compact('order', 'orderLists'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
