<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthorTest extends TestCase
{
    /**
     * Test get Author list.
     *
     * @return void
     */
    public function test_show_list_of_authors()
    {
        $response = $this->getJson('api/authors');

        $response
        ->assertStatus(200)
        ->assertJson([
            'success' => true,
        ]);
    }
}
