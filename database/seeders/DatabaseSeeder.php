<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Technologie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Technologie::factory()->create([
            'nom' => 'Laravel',
        ]);
        Technologie::factory()->create([
            'nom' => 'React JS',
        ]);
        Technologie::factory()->create([
            'nom' => 'Spring Boot',
        ]);
        Technologie::factory()->create([
            'nom' => 'Django',
        ]);
        Technologie::factory()->create([
            'nom' => 'Vue JS',
        ]);
    }
}
