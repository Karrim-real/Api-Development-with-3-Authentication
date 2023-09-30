<?php

namespace App\Services;

use App\Interfaces\CardInterface;
use App\Models\Card;

class CardService implements CardInterface
{
    /**
     * cardModel
     *
     * @var mixed
     */
    protected $cardModel;

    /**
     * __construct
     *
     * @param  mixed $card
     * @return void
     */
    public function __construct(Card $card) {
        $this->cardModel = $card;
    }

    /**
     * createCard
     *
     * @param  mixed $data
     * @return object
     */
    public function createCard(array $data)
    {
        return $this->cardModel::create($data);
    }

    /**
     * Cards
     *
     * @return void
     */
    public function Cards()
    {
        return $this->cardModel::latest()->simplePaginate(15);
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

    /**
     * updateCard
     *
     * @param  mixed $CardId
     * @param  mixed $data
     * @return void
     */
    public function updateCard(int $CardId, array $data)
    {
        return $this->cardModel::whereId($CardId)->update($data);
    }

    /**
     * deleteCard
     *
     * @param  mixed $CardId
     * @return void
     */
    public function deleteCard(int $CardId)
    {
        return $this->cardModel::destroy($CardId);
    }

    /**
     * checkIfCardExists
     *
     * @param  mixed $Card
     * @return void
     */
    public function checkIfCardExists(int $Card)
    {
        return $this->cardModel::where('id', $Card)->exists();
    }

    /**
     * activeCards
     *
     * @param  mixed $status
     * @return void
     */
    public function activeCards( int $status){
        return $this->cardModel::where('status', $status)->get();
    }
}
