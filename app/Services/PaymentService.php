<?php

namespace App\Services;

use App\Interfaces\PaymentInterface;
use App\Models\Payment;

class PaymentService implements PaymentInterface
{
    protected $PaymentModel;

    public function __construct(Payment $Payment) {
        $this->PaymentModel = $Payment;
    }

    /**
     * createPayment
     *
     * @param  mixed $data
     * @return object
     */
    public function createPayment(array $data)
    {
        return $this->PaymentModel::create($data);
    }

    public function Payments()
    {
        return $this->PaymentModel::latest()->simplePaginate(15);
    }

    /**
     * Payment
     *
     * @param  mixed $PaymentId
     * @return object
     */
    public function Payment(int $PaymentId)
    {

        return $this->PaymentModel::findOrFail($PaymentId);
    }

    public function updatePayment(int $PaymentId, array $data)
    {
        return $this->PaymentModel::whereId($PaymentId)->update($data);
    }

    public function deletePayment(int $PaymentId)
    {
        return $this->PaymentModel::destroy($PaymentId);
    }

    public function checkIfPaymentExists(int $Payment)
    {
        return $this->PaymentModel::where('id', $Payment)->exists();
    }

    public function activePayments( int $status){
        return $this->PaymentModel::where('status', $status)->get();
    }

    public function TotalPayouts($status){
        return $this->PaymentModel::where('status', $status)->sum('amount_paid');
    }
}
