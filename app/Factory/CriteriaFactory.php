<?php


namespace App\Factory;


use App\Contracts\ICriteria;
use App\Contracts\IFactory;
use App\Criterias\CountByPriceRange;
use App\Criterias\CountByVendorIdCriteria;
use App\Exceptions\CriteriaNotFoundException;

abstract class CriteriaFactory implements IFactory
{
    public static function Instantiate($criteriaName, $options = []): ICriteria
    {
        // TODO: Implement Instantiate() method.
        $criteriaClass=null;
        switch ($criteriaName){
            case "count_by_vendor_id";
                $criteriaClass=CountByVendorIdCriteria::class;
                break;
            case "count_by_price_range":
            default:
                $criteriaClass=CountByPriceRange::class;
                break;
        }
        if (is_null($criteriaClass))
            throw  new CriteriaNotFoundException();
        return new $criteriaClass($options);
    }


}
