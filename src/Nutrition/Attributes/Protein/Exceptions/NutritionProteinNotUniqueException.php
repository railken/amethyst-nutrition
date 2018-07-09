<?php

namespace Railken\LaraOre\Nutrition\Attributes\Protein\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionProteinNotUniqueException extends NutritionAttributeException
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
    protected $code = 'NUTRITION_PROTEIN_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
