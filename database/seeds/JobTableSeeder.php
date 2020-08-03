<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            "name" => "Wirausaha"
        ]);

        Job::create([
            "name" => "Wiraswasta"
        ]);

        Job::create([
            "name" => "Freelance"
        ]);

        Job::create([
            "name" => "Pelajar"
        ]);
    }
}
