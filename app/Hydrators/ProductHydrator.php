<?php


namespace App\Hydrators;


use App\Contracts\IHydrate;
use App\Entities\ProductEntity;

class ProductHydrator implements IHydrate
{

    public static function hydrate(array $data)
    {
        $product= new ProductEntity();
        $product->setId($data['id']);
        $product->setStartTime($data['start_time']);
        $product->setEndTime($data['end_time']);
        $product->setPrice($data['price']);
        $product->setQuantity($data['quantity']);
        $product->setVendor($data['vendor']);
        return $product;
    }
}
