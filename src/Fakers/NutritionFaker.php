<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class NutritionFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('calories', 20.3);
        $bag->set('salt', 20.3);
        $bag->set('protein', 20.3);
        $bag->set('fibre', 20.3);
        $bag->set('carbohydrate', 20.3);
        $bag->set('sugars', 20.3);
        $bag->set('fat', 20.3);
        $bag->set('saturates', 20.3);
        $bag->set('nutritionable_type', 'foo');
        $bag->set('nutritionable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
