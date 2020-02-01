<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'nutrition' => [
            'table'      => 'amethyst_nutritions',
            'comment'    => 'Nutrition',
            'model'      => Amethyst\Models\Nutrition::class,
            'schema'     => Amethyst\Schemas\NutritionSchema::class,
            'repository' => Amethyst\Repositories\NutritionRepository::class,
            'serializer' => Amethyst\Serializers\NutritionSerializer::class,
            'validator'  => Amethyst\Validators\NutritionValidator::class,
            'authorizer' => Amethyst\Authorizers\NutritionAuthorizer::class,
            'faker'      => Amethyst\Fakers\NutritionFaker::class,
            'manager'    => Amethyst\Managers\NutritionManager::class,
        ],
    ]
];
