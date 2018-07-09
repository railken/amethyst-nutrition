<?php

namespace Railken\LaraOre\Nutrition\Exceptions;

class NutritionNotFoundException extends NutritionException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NUTRITION_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
