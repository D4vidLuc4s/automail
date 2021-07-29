<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class sendMail extends TestCase
{
    /**
     * Test a console command.
     *
     * @return void
     */
    public function send_mail()
    {
        $this->artisan('mail:send')
            ->assertExitCode(1);
    }
}
