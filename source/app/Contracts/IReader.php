<?php


namespace App\Contracts;


interface IReader
{

    /**
     * Read in incoming data and parse to objects
     */
    public function read(string $input): IOfferCollection;
}
