<?php namespace Kitbs\Mailgun\Facades;

use Illuminate\Support\Facades\Facade;

class MailgunFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'mailgun'; }

}