<?php


namespace App\Services;


/**
 * Class AbstractCriteria
 * @package App\Services
 */
abstract class AbstractCriteria
{

    /**
     * @var array
     */
    protected $options;

    /**
     * AbstractCriteria constructor.
     * @param array $options
     */
    public function __construct($options=[])
    {
        $this->options= $options;
    }

}
