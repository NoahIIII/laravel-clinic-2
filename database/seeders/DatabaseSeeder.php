<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Major;
use App\Models\User;
use Database\Factories\MajorFactory;
use Database\Factories\UserFactory;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     User::factory()->count(10)->create();
     Major::factory()->count(10)->create();
     Contact::factory()->count(200)->create();
    //  Doctor::factory()->count(50)->create();

        }
}
