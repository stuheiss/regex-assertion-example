<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanMatchRegexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //$this->assertTrue(true);
        $response = $this->get('/random');

        $response->assertStatus(200);
        $response->assertSeeText('Hello');

        // expect content: 'Hello and the winning number is <number>!' where number is >= 0 and <= 100
        // get the actual page content
        $content = $response->baseResponse->original;
        // assert a regex
        $this->assertRegExp('/^Hello .* winning number is \d+!$/', $content);
    }
}
