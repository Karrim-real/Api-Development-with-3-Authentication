<?php

namespace App\Services;

use App\Interfaces\CardInterface;
use App\Models\Card;

class CardService implements CardInterface
{
    protected $cardModel;

    public function __construct(Card $card) {
        $this->cardModel = $card;
    }

    /**
     * createCard
     *
     * @param  mixed $data
     * @return void
     */
    public function createCard(array $data)
    {
        return $this->cardModel::create($data);
    }

    public function Cards()
    {
        return $this->cardModel::all();
    }

    /**
     * Card
     *
     * @param  mixed $CardId
     * @return object
     */
    public function Card(int $CardId)
    {

        return $this->cardModel::findOrFail($CardId);
    }

    public function updateCard(int $CardId, array $data)
    {
        return $this->cardModel::whereId($CardId)->update($data);
    }

    public function deleteCard(int $CardId)
    {
        return $this->cardModel::destroy($CardId);
    }

    public function checkIfCardExists(int $Card)
    {

        return Card::where('id', $Card)->exists();

    }
}
