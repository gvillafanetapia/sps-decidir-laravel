<?php

namespace SPSDecidirWrapper\Facades;

use Illuminate\Support\Facades\Facade;

class SPS extends Facade {

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'SPS';
    }

}