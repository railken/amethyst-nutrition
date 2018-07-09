<?php

namespace Railken\LaraOre\Nutrition\Attributes\Protein\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionProteinNotDefinedException extends NutritionAttributeException
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
    protected $code = 'NUTRITION_PROTEIN_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
