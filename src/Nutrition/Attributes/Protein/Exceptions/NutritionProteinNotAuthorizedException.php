<?php

namespace Railken\LaraOre\Nutrition\Attributes\Protein\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionProteinNotAuthorizedException extends NutritionAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'protein';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NUTRITION_PROTEIN_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
