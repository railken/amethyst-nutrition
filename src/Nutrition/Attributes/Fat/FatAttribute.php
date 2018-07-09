<?php

namespace Railken\LaraOre\Nutrition\Attributes\Fat;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;
use Respect\Validation\Validator as v;

class FatAttribute extends BaseAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'fat';

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
        Tokens::NOT_DEFINED    => Exceptions\NutritionFatNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\NutritionFatNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\NutritionFatNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\NutritionFatNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'nutrition.attributes.fat.fill',
        Tokens::PERMISSION_SHOW => 'nutrition.attributes.fat.show',
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
