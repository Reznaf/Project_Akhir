<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        User::factory(10)->create([
            'name' => Str::random(4),
            'email' => Str::random(4).'@example.com',
            'password' => Str::random(4),
        ]);
    }
}
