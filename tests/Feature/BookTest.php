<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    /**
     * Test get Books list.
     *
     * @return void
     */
    public function test_show_list_of_books()
    {
        $response = $this->getJson('api/books');

        $response
        ->assertStatus(200)
        ->assertJson([
            'success' => true,
        ]);
    }

    /**
     * Test get Books list with filter.
     *
     * @return void
     */
    public function test_show_list_of_books_with_filter()
    {
        $response = $this->getJson('api/books?search=Дэвид');

        $response
        ->assertStatus(200)
        ->assertJson([
            'success' => true,
        ]);
    }
}
