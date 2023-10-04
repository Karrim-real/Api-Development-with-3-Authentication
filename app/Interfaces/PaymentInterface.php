<?php

namespace App\Interfaces;

interface PaymentInterface
{
    /**
     * createPayment
     *
     * @param  mixed $data
     * @return void
     */
    public function createPayment(array $data);
    /**
     * Payments
     *
     * @return void
     */
    public function Payments();
    /**
     * Payment
     *
     * @param  mixed $PaymentId
     * @return void
     */
    public function Payment(int $PaymentId);
    /**
     * UpdatePayment
     *
     * @param  mixed $PaymentId
     * @param  mixed $data
     * @return void
     */
    public function UpdatePayment(int $PaymentId, array $data);
    /**
     * deletePayment
     *
     * @param  mixed $PaymentId
     * @return void
     */
    public function deletePayment(int $PaymentId);
    /**
     * checkIfPaymentExists
     *
     * @param  mixed $PaymentId
     * @return void
     */
    public function checkIfPaymentExists(int $PaymentId);

    /**
     * getPayStackPayment
     *
     * @param  mixed $url
     * @return void
     */
    public function getPayStackPayment( string $url);

    /**
     * postPayStack
     *
     * @param  mixed $url
     * @param  mixed $data
     * @return void
     */
    public function postPayStackPayment(string $url, array $data);

}
