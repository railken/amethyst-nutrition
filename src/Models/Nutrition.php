<?php

namespace Amethyst\Models;

use Amethyst\Core\ConfigurableModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Railken\Lem\Contracts\EntityContract;

/**
 * @property float $calories
 */
class Nutrition extends Model implements EntityContract
{
    use SoftDeletes;
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.nutrition.data.nutrition');
        parent::__construct($attributes);
    }

    /**
     * Get all of the owning nutrition models.
     */
    public function nutritionable(): MorphTo
    {
        return $this->morphTo();
    }
}
