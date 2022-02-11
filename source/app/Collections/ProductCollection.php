<?php


namespace App\Collections;

use App\Contracts\IOffer;
use App\Contracts\IOfferCollection;
use App\Services\AbstractCollection;

class ProductCollection extends AbstractCollection implements IOfferCollection
{


    public function get(int $index): IOffer
    {
        return  $this->itrator->get($index);
    }

    public function getIterator(): \Iterator
    {
        return $this->itrator;
    }

}
