<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        factory(\App\Entities\User::class)->create();
        $this->assertTrue(true);
    }
}
