<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    protected $paymentService;
    public function __construct(PaymentService $paymentService) {
        $this->paymentService = $paymentService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = $this->paymentService->Payments();
        $totalPayout = $this->paymentService->TotalPayouts(1);

        return view('backend.payments.index', compact('payments', 'totalPayout'));
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
    public function show(string $payment)
    {
        $payment = $this->paymentService->Payment($payment);
        return view('backend.orders.edit', compact('payment'));
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
    public function update(Request $request, string $payment)
    {
        $data['status'] = $request->status;

        if ($this->paymentService->updatePayment($payment,$data)) {

            return redirect()->route('payment.index')->with(['Info' => 'GiftCard Updated']);

        }
        return redirect()->back()->with(['error', 'An error occurred']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $payment)
    {
        if ($this->paymentService->deletePayment($payment)) {
            return response()->json([
                'status' => 200,
                'message' => 'Payment deleted'
            ]);
            // return redirect()->back()->with('warning', 'You have deleted denomination');
        }
        return redirect()->back()->with(['danger'=> 'No record Found']);
    }
}
