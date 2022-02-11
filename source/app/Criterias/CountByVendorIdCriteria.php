<?php


namespace App\Criterias;

use App\Contracts\ICriteria;
use App\Entities\ProductEntity;
use App\Itrators\ProductsItrator;
use App\Services\AbstractCriteria;

class CountByVendorIdCriteria extends AbstractCriteria implements ICriteria
{
    public function meetCriteria($productCollection)
    {
        if (!isset($this->options[0]))
            throw new \Exception("Couldn't find any options!!");
        $vendorId=$this->options[0];
        $productsMeetCriteriaItrator=new ProductsItrator([]);
        $itrator= $productCollection->getIterator();
        foreach($itrator as $key => $product) {
            if ($product->getVendor()->getId()==$vendorId)
                $productsMeetCriteriaItrator->push($product);
        }
        return $productsMeetCriteriaItrator->count();
    }
}
