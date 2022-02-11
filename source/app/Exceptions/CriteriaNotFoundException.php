<?php

namespace App\Exceptions;

use Exception;

class CriteriaNotFoundException extends Exception
{
    /**
     * @var string
     */
    protected  $message="Criteria Not Found Exception";

    /**
     * CriteriaNotFoundException constructor.
     *
     * @param string $key
     * @param string $type
     */
    public function __construct()
    {
    }


}
