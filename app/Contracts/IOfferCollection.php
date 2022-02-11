<?php


namespace App\Contracts;


interface IOfferCollection
{
    public function get(int $index) :IOffer;
    public function getIterator() : \Iterator;
}
