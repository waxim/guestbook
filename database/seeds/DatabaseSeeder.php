<?php

use Illuminate\Database\Seeder;

use App\Guestbook;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Guestbook::class, 100)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
