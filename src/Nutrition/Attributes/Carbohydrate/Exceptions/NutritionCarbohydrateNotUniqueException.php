<?php

namespace Railken\LaraOre\Nutrition\Attributes\Carbohydrate\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionCarbohydrateNotUniqueException extends NutritionAttributeException
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
    protected $code = 'NUTRITION_CARBOHYDRATE_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
