<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccountControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGetUserFullBalance(): void
    {
        $response = $this->get('/api/user/balance');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => ['amount']
            ]);
    }
}
