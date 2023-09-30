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

    /**
     * updatePayment
     *
     * @param  mixed $PaymentId
     * @param  mixed $data
     * @return void
     */
    public function updatePayment(int $PaymentId, array $data)
    {
        return $this->PaymentModel::whereId($PaymentId)->update($data);
    }

    /**
     * deletePayment
     *
     * @param  mixed $PaymentId
     * @return void
     */
    public function deletePayment(int $PaymentId)
    {
        return $this->PaymentModel::destroy($PaymentId);
    }

    /**
     * checkIfPaymentExists
     *
     * @param  mixed $Payment
     * @return void
     */
    public function checkIfPaymentExists(int $Payment)
    {
        return $this->PaymentModel::where('id', $Payment)->exists();
    }

    /**
     * activePayments
     *
     * @param  mixed $status
     * @return void
     */
    public function activePayments( int $status){
        return $this->PaymentModel::where('status', $status)->get();
    }

    /**
     * TotalPayouts
     *
     * @param  mixed $status
     * @return void
     */
    public function TotalPayouts($status){
        return $this->PaymentModel::where('status', $status)->sum('amount_paid');
    }
}
