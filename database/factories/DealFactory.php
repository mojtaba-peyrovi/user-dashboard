<?php
use App\Deal;
use Faker\Generator as Faker;

$factory->define(Deal::class, function (Faker $faker) {

    return [
        'providerId' => $faker->numberBetween(1,20),
        'productName' => $faker->word,
        'featured' =>  $faker->randomElement([0,1]),
        'exclusive' => $faker->randomElement([0,1]),
        'applyBtn' => 1,
        'class' => $faker->numberBetween(1,5),
        'carCat1' => $faker->randomElement([0,1]),
        'carCat2' => $faker->randomElement([0,1]),
        'carCat3' => $faker->randomElement([0,1]),
        'personal' => $faker->randomElement([0,1]),
        'commercial' => $faker->randomElement([0,1]),
        'bodyType' => $faker->randomElement(['sedan','van','pickup']),
        'engine' => $faker->randomElement([1000,1200,1300,1600,1800,2000,2200,2300,2400,3000,4000,5000,6000,]),
        'eligibleGroup' => $faker->numberBetween(1,5),
        'bangkok' => $faker->randomElement([0,1]),
        'upCountry' => $faker->randomElement([0,1]),
        'eligibleMake' => function() {
            $carMakes = ['Mercedes-Benz','BMW','Toyota'];
            $k = array_rand($carMakes);
            return $carMakes[$k] . ','. $carMakes[$k + 1] .',' . $carMakes[$k - 1];
        },
        'eligibleModel' => $faker->brand
    ];
});
