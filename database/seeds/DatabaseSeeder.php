<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\Article::factory(30)->create();
        App\Launch::factory(15)->create();
        App\Event::factory(15)->create();
    }
}
