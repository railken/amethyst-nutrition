<?php

namespace Railken\LaraOre\Nutrition\Attributes\Salt;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;
use Respect\Validation\Validator as v;

class SaltAttribute extends BaseAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'salt';

    /**
     * Is the attribute required
     * This will throw not_defined exception for non defined value and non existent model.
     *
     * @var bool
     */
    protected $required = true;

    /**
     * Is the attribute unique.
     *
     * @var bool
     */
    protected $unique = false;

    /**
     * List of all exceptions used in validation.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_DEFINED    => Exceptions\NutritionSaltNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\NutritionSaltNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\NutritionSaltNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\NutritionSaltNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'nutrition.attributes.salt.fill',
        Tokens::PERMISSION_SHOW => 'nutrition.attributes.salt.show',
    ];

    /**
     * Is a value valid ?
     *
     * @param \Railken\Laravel\Manager\Contracts\EntityContract $entity
     * @param mixed          $value
     *
     * @return bool
     */
    public function valid(EntityContract $entity, $value)
    {
        return v::numeric()->validate($value);
    }
}
