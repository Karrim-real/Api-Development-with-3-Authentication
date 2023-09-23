<?php

namespace App\Interfaces;

interface CardInterface
{
    /**
     * createCard
     *
     * @param  mixed $data
     * @return void
     */
    public function createCard(array $data);
    /**
     * Cards
     *
     * @return void
     */
    public function Cards();
    /**
     * Card
     *
     * @param  mixed $CardId
     * @return void
     */
    public function Card(int $CardId);
    /**
     * UpdateCard
     *
     * @param  mixed $CardId
     * @param  mixed $data
     * @return void
     */
    public function UpdateCard(int $CardId, array $data);
    /**
     * deleteCard
     *
     * @param  mixed $CardId
     * @return void
     */
    public function deleteCard(int $CardId);
    /**
     * checkIfCardExists
     *
     * @param  mixed $CardId
     * @return void
     */
    public function checkIfCardExists(int $CardId);


}
