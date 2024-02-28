<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User; // Import User model if you're using it to assign applications
use App\Models\JobOffer; // Import JobOffer model if you're assigning applications to job offers

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ensure you have some users and job offers seeded before running this seeder
        $users = User::all();
        $jobOffers = JobOffer::all();

        foreach(range(1, 10) as $index) { // Create 50 applications
            DB::table('applications')->insert([
                'user_id' => $users->random()->id, // Assuming you have a user_id column
                'job_offer_id' => $jobOffers->random()->id, // Assuming you have a job_offer_id column
                'status' => "0", // Example status
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
