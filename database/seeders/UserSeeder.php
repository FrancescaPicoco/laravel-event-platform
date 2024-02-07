<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker): void //non posso usare $userTot
    {
            for ($i = 0; $i < 11; $i++) {
                $newUser = new User();
                $newUser->name = $faker->name();
                $newUser->email = $faker->email();
                $newUser->password = Hash::make("password");
                $newUser->save();
            }
        }
    };

