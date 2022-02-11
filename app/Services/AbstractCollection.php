<?php


namespace App\Services;


use App\Contracts\IOffer;
use App\Contracts\IOfferCollection;
use App\Itrators\ProductsItrator;

/**
 * Class AbstractCollection
 * @package App\Services
 */
abstract class AbstractCollection implements IOfferCollection
{

    /**
     * @var \Illuminate\Support\Collection
     */
    protected $itrator;

    /**
     * AbstractCollection constructor.
     * @param $items
     */
    public function __construct($items)
    {
        $this->itrator = new ProductsItrator($items);
    }


    public function push($product)
    {
        return $this->itrator->push($product);
    }
}
