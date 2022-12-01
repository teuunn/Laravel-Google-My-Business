<?php

namespace Teuunn\LaravelGoogleMyBusiness\Facades;

use Illuminate\Support\Facades\Facade;

class GoogleMyBusinessFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Teuunn\LaravelGoogleMyBusiness\GoogleMyBusiness';
    }
}