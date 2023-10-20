<?php

namespace App\Services;


use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


/**
 * Class TestService.
 */
class TestService extends DuskTestCase
{

    private $browser;

    public function screen()
    {
       $this->browser = new Browser($this->driver());
    }

}
