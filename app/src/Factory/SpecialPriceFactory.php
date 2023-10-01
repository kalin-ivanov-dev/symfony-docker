<?php

namespace App\Factory;

use App\Entity\SpecialPrice;
use App\Repository\SpecialPriceRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<SpecialPrice>
 *
 * @method        SpecialPrice|Proxy                     create(array|callable $attributes = [])
 * @method static SpecialPrice|Proxy                     createOne(array $attributes = [])
 * @method static SpecialPrice|Proxy                     find(object|array|mixed $criteria)
 * @method static SpecialPrice|Proxy                     findOrCreate(array $attributes)
 * @method static SpecialPrice|Proxy                     first(string $sortedField = 'id')
 * @method static SpecialPrice|Proxy                     last(string $sortedField = 'id')
 * @method static SpecialPrice|Proxy                     random(array $attributes = [])
 * @method static SpecialPrice|Proxy                     randomOrCreate(array $attributes = [])
 * @method static SpecialPriceRepository|RepositoryProxy repository()
 * @method static SpecialPrice[]|Proxy[]                 all()
 * @method static SpecialPrice[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static SpecialPrice[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static SpecialPrice[]|Proxy[]                 findBy(array $attributes)
 * @method static SpecialPrice[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static SpecialPrice[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class SpecialPriceFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'price' => self::faker()->numberBetween(0,(ProductFactory::random()->getPrice() - 10)),
            'product' => ProductFactory::random(),
            'quantity' => self::faker()->numberBetween(1,5),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(SpecialPrice $specialPrice): void {})
        ;
    }

    protected static function getClass(): string
    {
        return SpecialPrice::class;
    }
}
