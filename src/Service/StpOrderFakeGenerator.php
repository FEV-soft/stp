<?php


namespace App\Service;


use App\ViewModel\StpOrder;
use Faker\Factory;
use Faker\Generator;

final class StpOrderFakeGenerator implements StpOrderInterface
{

    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('ru_RU');
    }

    public function createStpOrder (int $id): StpOrder
    {
        return new StpOrder(
            $id,
            $this->faker->randomNumber(2),
            $this->faker->boolean(50),
            $this->faker->boolean(50),
            $this->faker->boolean(50),
            $this->faker->boolean(50),
            $this->faker->boolean(50),
            $this->faker->boolean(50),
            $this->faker->boolean(50),
            $this->faker->boolean(50),
            $this->faker->boolean(50),
            $this->faker->boolean(50),
        );
    }

    public function getStpOrder(int $id): StpOrder
    {
        return $this->createStpOrder($id);
    }

}