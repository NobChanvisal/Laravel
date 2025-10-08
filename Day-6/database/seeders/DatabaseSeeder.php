<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\ClassSubject;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
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
        //User::factory(50)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Student::factory(100)->create();
        // Teacher::factory(50)->create();
        // Teacher::factory()
        // ->has(Classes::factory()->count(3)) // 1 teacher → 3 classes
        // ->count(5) // 5 teachers total
        // ->create();
        // Subject::factory(20)->create();
        ClassSubject::factory(10)->create();
    }
}
