<?php


namespace App\Service;


use App\ViewModel\StpClient;
use Faker\Factory;
use Faker\Generator;

final class StpClientFakeGenerator implements StpClientInterface
{

    private const COMPANYTYPE = [
        'ТОВ',
        'ПП',
        'ДП',
        'ФОП',
    ];

    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('ru_RU');
    }

    public function createStpClient (int $id): StpClient
    {
        return new StpClient(
            $id,
            $this->faker->company,
            $this->faker->randomElement(self::COMPANYTYPE),
            $this->faker->randomNumber(6),
            $this->faker->iban('UA'),
            $this->faker->address,
            $this->faker->phoneNumber,
            $this->faker->email,
            $this->faker->firstName,
            $this->faker->lastName,
            $this->faker->phoneNumber
        );
    }

    public function getStpClient(int $id): StpClient
    {
        return $this->createStpClient($id);
    }

}