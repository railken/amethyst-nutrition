<?php

namespace Railken\LaraOre\Nutrition\Attributes\Carbohydrate;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;
use Respect\Validation\Validator as v;

class CarbohydrateAttribute extends BaseAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'carbohydrate';

    /**
     * Is the attribute required
     * This will throw not_defined exception for non defined value and non existent model.
     *
     * @var bool
     */
    protected $required = false;

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
        Tokens::NOT_DEFINED    => Exceptions\NutritionCarbohydrateNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\NutritionCarbohydrateNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\NutritionCarbohydrateNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\NutritionCarbohydrateNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'nutrition.attributes.carbohydrate.fill',
        Tokens::PERMISSION_SHOW => 'nutrition.attributes.carbohydrate.show',
    ];

    /**
     * Is a value valid ?
     *
     * @param \Railken\Laravel\Manager\Contracts\EntityContract $entity
     * @param mixed                                             $value
     *
     * @return bool
     */
    public function valid(EntityContract $entity, $value)
    {
        return v::numeric()->validate($value);
    }
}
