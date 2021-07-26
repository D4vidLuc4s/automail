<?php

namespace Tests\Browser;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class mailTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/sendMail')
                ->waitForText('Mailhog')
                ->assertSee('Mailhog')
                ->clickLink('Mailhog')
                ->waitForText('Jim')
                ->assertSee('Welcome')
                ->assertSee('Enable Jim')
                ->assertSee('nyx@teste.com');
        });
    }
}
