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
        $this->call(SectionTableSeeder::class);
        $this->call(UserTableSeeder::class);
        // $this->call(MessageSeeder::class);
        $this->call(PagesTableSeeder::class);

        // factory(App\Message::class, 50)->create();
    }
}
