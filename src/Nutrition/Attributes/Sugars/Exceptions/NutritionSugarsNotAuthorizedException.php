<?php

namespace Railken\LaraOre\Nutrition\Attributes\Sugars\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionSugarsNotAuthorizedException extends NutritionAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'sugars';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NUTRITION_SUGARS_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
