<?php

namespace Railken\LaraOre\Nutrition;

use Railken\Laravel\Manager\ModelAuthorizer;
use Railken\Laravel\Manager\Tokens;

class NutritionAuthorizer extends ModelAuthorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'nutrition.create',
        Tokens::PERMISSION_UPDATE => 'nutrition.update',
        Tokens::PERMISSION_SHOW   => 'nutrition.show',
        Tokens::PERMISSION_REMOVE => 'nutrition.remove',
    ];
}
