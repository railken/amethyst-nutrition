<?php

namespace Railken\LaraOre\Nutrition\Attributes\Fat\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionFatNotDefinedException extends NutritionAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'fat';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NUTRITION_FAT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
