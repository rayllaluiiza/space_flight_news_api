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
        factory(App\Article::class, 30)->create();
        factory(App\Launch::class, 15)->create();
        factory(App\Event::class, 15)->create();
    }
}
