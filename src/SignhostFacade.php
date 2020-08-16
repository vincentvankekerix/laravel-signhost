<?php

namespace Signhost;

class SignhostFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'signhost';
    }
}
