<?php

namespace App\Interfaces;

interface DenominationInterface
{
    /**
     * createDenomination
     *
     * @return void
     */
    public function createDenomination(array $data);

    /**
     * Denominations
     *
     * @return void
     */
    public function Denominations();

    /**
     * Denomination
     *
     * @param  mixed $denominationId
     * @return void
     */
    public function Denomination(int $denominationId);

    /**
     * updateDenomination
     *
     * @param  mixed $denominationId
     * @param  mixed $data
     * @return void
     */
    public function updateDenomination(int $denominationId, array $data);

    /**
     * deleteDenomination
     *
     * @param  mixed $denominationId
     * @return void
     */
    public function deleteDenomination(int $denominationId);
}
