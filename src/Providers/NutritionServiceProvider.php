<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use Railken\Amethyst\Common\CommonServiceProvider;

class NutritionServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();

        \Illuminate\Database\Eloquent\Builder::macro('nutrition', function (): MorphOne {
            return app('amethyst')->createMacroMorphOneRelation($this, \Railken\Amethyst\Models\Nutrition::class, 'nutrition', 'nutritionable');
        });
    }
}
