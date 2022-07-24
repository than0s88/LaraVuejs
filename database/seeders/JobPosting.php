<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobPosting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\JobPosting::factory(10)->create();
    }
}
