<?php

namespace Railken\LaraOre\Nutrition;

use Railken\Laravel\Manager\Contracts\AgentContract;
use Railken\Laravel\Manager\ModelManager;
use Railken\Laravel\Manager\Tokens;
use Illuminate\Support\Facades\Config;

class NutritionManager extends ModelManager
{
    /**
     * Class name entity.
     *
     * @var string
     */
    public $entity;
    
    /**
     * List of all attributes.
     *
     * @var array
     */
    protected $attributes = [
        Attributes\Id\IdAttribute::class,
        Attributes\CreatedAt\CreatedAtAttribute::class,
        Attributes\UpdatedAt\UpdatedAtAttribute::class,
         Attributes\DeletedAt\DeletedAtAttribute::class,
         Attributes\Salt\SaltAttribute::class,
         Attributes\Protein\ProteinAttribute::class,
         Attributes\Fibre\FibreAttribute::class,
         Attributes\Sugars\SugarsAttribute::class,
         Attributes\Fat\FatAttribute::class
     ];

    /**
     * List of all exceptions.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_AUTHORIZED => Exceptions\NutritionNotAuthorizedException::class,
    ];

    /**
     * Construct.
     *
     * @param AgentContract $agent
     */
    public function __construct(AgentContract $agent = null)
    {
        $this->entity = Config::get('ore.nutrition.entity');
        $this->attributes = array_merge($this->attributes, array_values(Config::get('ore.nutrition.attributes')));

        $classRepository = Config::get('ore.nutrition.repository');
        $this->setRepository(new $classRepository($this));

        $classSerializer = Config::get('ore.nutrition.serializer');
        $this->setSerializer(new $classSerializer($this));

        $classAuthorizer = Config::get('ore.nutrition.authorizer');
        $this->setAuthorizer(new $classAuthorizer($this));

        $classValidator = Config::get('ore.nutrition.validator');
        $this->setValidator(new $classValidator($this));

        parent::__construct($agent);
    }
}
