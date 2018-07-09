<?php

namespace Railken\LaraOre\Tests\Nutrition;

use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Nutrition\NutritionFaker;
use Railken\LaraOre\Support\Testing\ApiTestableTrait;

class ApiTest extends BaseTest
{
    use ApiTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return Config::get('ore.api.router.prefix').Config::get('ore.nutrition.http.router.prefix');
    }

    /**
     * Test common requests.
     *
     * @return void
     */
    public function testSuccessCommon()
    {
        $this->commonTest($this->getBaseUrl(), NutritionFaker::make()->parameters());
    }
}
