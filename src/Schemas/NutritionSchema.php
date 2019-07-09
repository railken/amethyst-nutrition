<?php

namespace Amethyst\Schemas;

use Amethyst\Models\Nutrition;
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
                ->setFillable(false)
                ->setDefault(function (Nutrition $entity) {
                    return $entity->calories * 4.184;
                }),
            Attributes\EnumAttribute::make('nutritionable_type', app('amethyst')->getMorphListable('nutrition', 'nutritionable')),
            Attributes\MorphToAttribute::make('nutritionable_id')
                ->setRelationKey('nutritionable_type')
                ->setRelationName('nutritionable')
                ->setRelations(app('amethyst')->getMorphRelationable('nutrition', 'nutritionable')),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
