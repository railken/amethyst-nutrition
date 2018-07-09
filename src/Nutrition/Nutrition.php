<?php

namespace Railken\LaraOre\Nutrition;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Illuminate\Support\Facades\Config;

class Nutrition extends Model implements EntityContract
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'salt',
        'protein',
        'fibre',
        'sugars',
        'fat',
        'saturates',
        'carbohydrate',
        'calories'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('ore.nutrition.table');
        $this->fillable = array_merge($this->fillable, array_keys(Config::get('ore.nutrition.attributes')));
    }
}
