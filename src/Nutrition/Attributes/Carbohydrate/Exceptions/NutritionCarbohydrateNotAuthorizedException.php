<?php

namespace Railken\LaraOre\Nutrition\Attributes\Carbohydrate\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionCarbohydrateNotAuthorizedException extends NutritionAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'carbohydrate';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NUTRITION_CARBOHYDRATE_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
