<?php


namespace App\Contracts;


interface IFactory
{
    /**
     * DEFAULT Criterias NAMESPACE
     */
    const CRITERIA_NAMESPACE ="App\Criterias\\";

    public static function Instantiate($criteriaName, $options=[]): ICriteria;
}
