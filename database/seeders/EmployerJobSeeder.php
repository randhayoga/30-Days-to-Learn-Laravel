<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employer;
use App\Models\Job;

class EmployerJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employers = Employer::factory()->count(5)->create();
        Job::factory()->count(50)->recycle($employers)->create();
    }
}
