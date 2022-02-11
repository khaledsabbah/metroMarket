<?php


namespace App\Itrators;


/**
 * Class ProductsItrator
 * @package App\Itrators
 */
class ProductsItrator implements \Iterator
{

    /**
     * @var int
     */
    private $position = 0;
    private $products;

    /**
     * ProductsItrator constructor.
     * @param $products
     */
    public function __construct($products) {
        $this->position = 0;
        $this->products= $products;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->products[$this->position];
    }


    public function next()
    {
        ++$this->position;
    }

    /**
     * @return bool|float|int|string|null
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return isset($this->products[$this->position]);
    }

    /**
     *
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @param $product
     */
    public function push($product)
    {
        $this->products[count($this->products)]= $product;
    }

    public function count()
    {
        return count($this->products);
    }
}
