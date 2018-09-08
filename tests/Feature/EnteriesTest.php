<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Guestbook;

class EnteriesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * We can see the list
     *
     * @return void
     */
    public function testCanSeeList()
    {
        factory(Guestbook::class, 100)->create();
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * We can add entry
     *
     * @return void
     */
    public function testCanAddEntry()
    {
        $response = $this->post('/');
        $response->assertStatus(201);
    }
}
