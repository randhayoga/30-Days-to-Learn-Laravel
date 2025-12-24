<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

class EmployerJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employers = Employer::factory()->count(5)->create();
        $jobs = Job::factory()->count(50)->recycle($employers)->create();
        $tags = Tag::factory()->count(4)->create();

        foreach ($jobs as $job) {
            $randomTags = $tags->random(2)->pluck('id');
            $job->tags()->attach($randomTags[0]);
            $job->tags()->attach($randomTags[1]);
        }
    }
}
