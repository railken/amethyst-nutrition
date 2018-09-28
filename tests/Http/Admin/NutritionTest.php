<?php

namespace Railken\Amethyst\Tests\Http\Admin;

use Illuminate\Support\Facades\Nutrition;
use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\NutritionFaker;
use Railken\Amethyst\Tests\BaseTest;

class NutritionTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = NutritionFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Base path config.
     *
     * @var string
     */
    protected $config = 'amethyst.nutrition.http.admin.nutrition';
}
