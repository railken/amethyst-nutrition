<?php

namespace Railken\LaraOre\Nutrition\Exceptions;

class NutritionNotAuthorizedException extends NutritionException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NUTRITION_NOT_AUTHORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
