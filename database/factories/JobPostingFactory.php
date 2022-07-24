<?php

namespace Database\Factories;

use App\Models\JobPosting;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobPostingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobPosting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'job_name' => $faker->job_name,
            'job_description' => $this->faker->job_description,
            'vacants' => $this->faker->vacants,
        ];
    }
}
