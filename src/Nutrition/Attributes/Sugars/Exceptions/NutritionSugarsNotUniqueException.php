<?php

namespace Railken\LaraOre\Nutrition\Attributes\Sugars\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionSugarsNotUniqueException extends NutritionAttributeException
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
    protected $code = 'NUTRITION_SUGARS_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
