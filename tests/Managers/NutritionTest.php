<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\NutritionFaker;
use Railken\Amethyst\Managers\NutritionManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class NutritionTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = NutritionManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = NutritionFaker::class;
}
