<?php

namespace Railken\LaraOre\Nutrition\Attributes\Sugars\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionSugarsNotValidException extends NutritionAttributeException
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
    protected $code = 'NUTRITION_SUGARS_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
