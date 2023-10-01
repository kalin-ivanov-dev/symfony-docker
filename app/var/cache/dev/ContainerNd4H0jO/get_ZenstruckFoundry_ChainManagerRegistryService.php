<?php

namespace ContainerNd4H0jO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_ChainManagerRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.zenstruck_foundry.chain_manager_registry' shared service.
     *
     * @return \Zenstruck\Foundry\ChainManagerRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/ChainManagerRegistry.php';

        return $container->privates['.zenstruck_foundry.chain_manager_registry'] = new \Zenstruck\Foundry\ChainManagerRegistry([0 => ($container->services['doctrine'] ?? $container->getDoctrineService())]);
    }
}
