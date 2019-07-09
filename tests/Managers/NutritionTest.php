<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\NutritionFaker;
use Amethyst\Managers\NutritionManager;
use Amethyst\Tests\BaseTest;
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
