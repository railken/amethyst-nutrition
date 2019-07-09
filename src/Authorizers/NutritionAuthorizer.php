<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class NutritionAuthorizer extends Authorizer
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
