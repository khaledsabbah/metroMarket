<?php


namespace App\Criterias;


use App\Collections\ProductCollection;
use App\Contracts\ICriteria;
use App\Entities\ProductEntity;
use App\Itrators\ProductsItrator;
use App\Services\AbstractCriteria;

class CountByPriceRange extends AbstractCriteria implements ICriteria
{

    public function meetCriteria($productCollection)
    {
        if (!isset($this->options[0]) || !isset($this->options[1]))
            throw new \Exception("Couldn't find any price options!!. You must specify Lower Price & Max price ");
        $min=$this->options[0];
        $max=$this->options[1];
        $productsMeetCriteriaItrator=new ProductsItrator([]);
        $itrator= $productCollection->getIterator();
        foreach($itrator as $key => $product) {
            if ($product->getPrice() >= $min  && $product->getPrice() <= $max)
                $productsMeetCriteriaItrator->push($product);
        }
        return $productsMeetCriteriaItrator->count();

    }


}
