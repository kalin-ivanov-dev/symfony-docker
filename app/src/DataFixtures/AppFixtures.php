<?php

namespace App\DataFixtures;

use App\Factory\ProductFactory;
use App\Factory\SpecialPriceFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sku = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        foreach ($sku as $skuChar){
            ProductFactory::createOne(['sku' => $skuChar]);
        }
    
        SpecialPriceFactory::createMany(5);
    }
}
