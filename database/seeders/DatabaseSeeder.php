<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Akbar',
            'username' => 'akbar1234',
            'password' => bcrypt('test'),
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'japi',
            'username' => 'japi1234',
            'password' => bcrypt('test'),
            'role' => 'organisasi',
        ]);
    }
}
