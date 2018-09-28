<?php

namespace Railken\Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Schemas\NutritionSchema;
use Railken\Lem\Contracts\EntityContract;

/**
 * @property float $calories
 */
class Nutrition extends Model implements EntityContract
{
    use SoftDeletes;

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('amethyst.nutrition.managers.nutrition.table');
        $this->fillable = (new NutritionSchema())->getNameFillableAttributes();
    }
}
