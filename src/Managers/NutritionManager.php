<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Nutrition newEntity()
 * @method \Amethyst\Schemas\NutritionSchema getSchema()
 * @method \Amethyst\Repositories\NutritionRepository getRepository()
 * @method \Amethyst\Serializers\NutritionSerializer getSerializer()
 * @method \Amethyst\Validators\NutritionValidator getValidator()
 * @method \Amethyst\Authorizers\NutritionAuthorizer getAuthorizer()
 */
class NutritionManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.nutrition.data.nutrition';
}
