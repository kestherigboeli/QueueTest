<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CustomerTest extends TestCase
{
   /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->json('POST', '/save', ['firstname' => 'Sally', 'lastname' => 'Tunde', 'title' => 'Mr', 
        	'type' => 0, 'service' => 2]);
        $response
            ->assertStatus(200)
            ->assertJson([
                'created' => true,
            ]);
    }
}
