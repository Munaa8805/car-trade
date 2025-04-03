<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;
use App\Models\Service;
use App\Models\Testiminol;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Service::factory(10)->create();
        Testiminol::factory(10)->create();
        Team::factory(20)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
