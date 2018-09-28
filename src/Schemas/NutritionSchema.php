<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Models\Nutrition;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class NutritionSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\NumberAttribute::make('salt'),
            Attributes\NumberAttribute::make('protein'),
            Attributes\NumberAttribute::make('fibre'),
            Attributes\NumberAttribute::make('sugars'),
            Attributes\NumberAttribute::make('fat'),
            Attributes\NumberAttribute::make('saturates'),
            Attributes\NumberAttribute::make('carbohydrate'),
            Attributes\NumberAttribute::make('calories'),
            Attributes\NumberAttribute::make('joules')
                ->setDefault(function (Nutrition $entity) {
                    return $entity->calories * 4.184;
                }),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
