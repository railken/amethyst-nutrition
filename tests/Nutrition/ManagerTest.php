<?php

namespace Railken\LaraOre\Tests\Nutrition;

use Railken\LaraOre\Nutrition\NutritionFaker;
use Railken\LaraOre\Nutrition\NutritionManager;
use Railken\LaraOre\Support\Testing\ManagerTestableTrait;

class ManagerTest extends BaseTest
{
    use ManagerTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new NutritionManager();
    }

    public function testSuccessCommon()
    {
        $this->commonTest($this->getManager(), NutritionFaker::make()->parameters());
    }
}
