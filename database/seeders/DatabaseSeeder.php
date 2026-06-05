<?php

namespace Database\Seeders;

use App\Models\Complaint;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ],
        );

        if (Complaint::query()->count() === 0) {
            Complaint::insert([
                [
                    'date' => '2026-06-01',
                    'time' => '09:30:00',
                    'description' => 'Water leakage in the main hallway.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'date' => '2026-06-03',
                    'time' => '14:15:00',
                    'description' => 'Elevator not working on the 3rd floor.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'date' => '2026-06-05',
                    'time' => '18:45:00',
                    'description' => 'Street light is not functioning near the parking area.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
