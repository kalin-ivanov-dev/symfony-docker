<?php

namespace ContainerNd4H0jO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductCatalogControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProductCatalogController' shared autowired service.
     *
     * @return \App\Controller\ProductCatalogController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProductCatalogController.php';

        $container->services['App\\Controller\\ProductCatalogController'] = $instance = new \App\Controller\ProductCatalogController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\ProductCatalogController', $container));

        return $instance;
    }
}
