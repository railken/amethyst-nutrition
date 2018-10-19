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
            'model'      => Railken\Amethyst\Models\Nutrition::class,
            'schema'     => Railken\Amethyst\Schemas\NutritionSchema::class,
            'repository' => Railken\Amethyst\Repositories\NutritionRepository::class,
            'serializer' => Railken\Amethyst\Serializers\NutritionSerializer::class,
            'validator'  => Railken\Amethyst\Validators\NutritionValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\NutritionAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\NutritionFaker::class,
            'manager'   => Railken\Amethyst\Managers\NutritionManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'nutrition' => [
                'enabled'     => true,
                'controller'  => Railken\Amethyst\Http\Controllers\Admin\NutritionsController::class,
                'router'      => [
                    'as'        => 'nutrition.',
                    'prefix'    => '/nutritions',
                ],
            ],
        ],
    ],
];
