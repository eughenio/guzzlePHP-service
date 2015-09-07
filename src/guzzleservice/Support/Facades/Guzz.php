<?php

namespace Guzzle\Support\Facades;


use Illuminate\Support\Facades\Facade;

class Guzz extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'guzzlerequest';
    }

}