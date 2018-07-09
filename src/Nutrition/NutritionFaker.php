<?php

namespace Railken\LaraOre\Nutrition;

use Faker\Factory;
use Railken\Bag;
use Railken\Laravel\Manager\BaseFaker;

class NutritionFaker extends BaseFaker
{
    /**
     * @var string
     */
    protected $manager = NutritionManager::class;

    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('salt', 20.3);
        $bag->set('protein', 20.3);
        $bag->set('fibre', 20.3);
        $bag->set('sugars', 20.3);
        $bag->set('fat', 20.3);
        $bag->set('saturates', 20.3);
        return $bag;
    }
}
