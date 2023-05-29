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

    public function testGetUserSingleBankAccount(): void
    {
        $response = $this->get('/api/user/bank/balance?bank=a');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => ['balance']
            ])
            ->assertJson(['data'=>['balance' => 1]]);
    }
}
