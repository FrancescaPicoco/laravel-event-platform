<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $userTot = $this->command->ask("quanti utenti");
        $eventTot = $this->command->ask("quanti eventi");

        $this->callWith(UserSeeder::class, compact("userTot"));
        $this->callWith(EventSeeder::class, compact("eventTot"));

        $this->call([
            // UserSeeder::class,
            // EventSeeder::class,
            TagSeeder::class,
        ]);
    }
}
