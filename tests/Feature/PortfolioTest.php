<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get(): void
    {
        $response = $this->get('/portfolio');

        $response->assertStatus(200);
    }
}
