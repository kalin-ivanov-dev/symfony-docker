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
        $sku = ['E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $productA = ProductFactory::createOne(['sku' =>  'A','price' => 50]);
        $productB = ProductFactory::createOne(['sku' =>  'B','price' => 30]);
        ProductFactory::createOne(['sku' =>  'C','price' => 20]);
        ProductFactory::createOne(['sku' =>  'D','price' => 10]);
        foreach ($sku as $skuChar){
            ProductFactory::createOne(['sku' => $skuChar]);
        }
        SpecialPriceFactory::createOne(['price' => 130,'quantity' => 3,'product' => $productA]);
        SpecialPriceFactory::createOne(['price' => 45,'quantity' => 2,'product' => $productB]);
//        SpecialPriceFactory::createMany(5);
    }
}
