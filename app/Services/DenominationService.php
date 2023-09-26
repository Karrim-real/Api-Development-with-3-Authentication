<?php

namespace App\Services;

use App\Interfaces\DenominationInterface;
use App\Models\Denomination;

class DenominationService implements DenominationInterface
{
    protected $denominationModel;

    public function __construct(Denomination $denomination) {
        $this->denominationModel = $denomination;
    }

    /**
     * createDenomination
     *
     * @param  mixed $data
     * @return void
     */
    public function createDenomination(array $data)
    {
        return $this->denominationModel::create($data);
    }

    public function Denominations()
    {
        return $this->denominationModel::all();
    }

    /**
     * Denomination
     *
     * @param  mixed $DenominationId
     * @return object
     */
    public function Denomination(int $DenominationId)
    {

        return $this->denominationModel::findOrFail($DenominationId);
    }

    public function updateDenomination(int $DenominationId, array $data)
    {
        return $this->denominationModel::whereId($DenominationId)->update($data);
    }

    public function deleteDenomination(int $DenominationId)
    {
        return $this->denominationModel::destroy($DenominationId);
    }

    public function checkIfDenominationExists(int $Denomination)
    {
        return $this->denominationModel::where('id', $Denomination)->exists();
    }

    public function activeDenomination( int $status){
        return $this->denominationModel::where('status', $status)->get();
    }
}
