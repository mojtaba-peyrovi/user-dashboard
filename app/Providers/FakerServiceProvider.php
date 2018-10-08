<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MattWells\Faker\Vehicle\Provider;
class FakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \MattWells\Faker\Vehicle\Provider($faker));
    }
}
