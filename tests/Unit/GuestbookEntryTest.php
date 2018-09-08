<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Guestbook;

class GuestbookEntryTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * Test we can save enteries
     *
     * @return void
     */
    public function testWeCanAddGuestbooks()
    {
        factory(Guestbook::class, 100)->create();
        $enteries = Guestbook::all();
        $this->assertSame($enteries->count(), 100);
    }
}
