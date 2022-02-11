<?php


namespace App\Hydrators;


use App\Contracts\IHydrate;
use App\Entities\VendorEntity;

class VendorHydrator implements IHydrate
{

    public static function hydrate(array $data)
    {
        $vendor = new VendorEntity();
        $vendor->setId($data['id']);
        $vendor->setName($data['name']);
        return $vendor;
    }
}
