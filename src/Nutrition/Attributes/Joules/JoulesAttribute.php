<?php

namespace Railken\LaraOre\Nutrition\Attributes\Joules;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;
use Respect\Validation\Validator as v;

class JoulesAttribute extends BaseAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'joules';

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
        Tokens::NOT_DEFINED    => Exceptions\NutritionJoulesNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\NutritionJoulesNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\NutritionJoulesNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\NutritionJoulesNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'nutrition.attributes.joules.fill',
        Tokens::PERMISSION_SHOW => 'nutrition.attributes.joules.show',
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

    /**
     * Retrieve default value
     *
     * @param \Railken\Laravel\Manager\Contracts\EntityContract $entity
     *
     * @return mixed
     */
    public function getDefault(EntityContract $entity)
    {
        return $entity->calories*$this->getRatio();
    }

    /**
     * Retrieve ration conversion from calories to joules
     *
     * @return float
     */
    public function getRatio()
    {
        return 4.184;
    }
}
