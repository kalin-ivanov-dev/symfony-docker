<?php

namespace ContainerNd4H0jO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnection_EventManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.dbal.default_connection.event_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ContainerAwareEventManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';

        return $container->privates['doctrine.dbal.default_connection.event_manager'] = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService', true],
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService', true],
            'stof_doctrine_extensions.listener.sluggable' => ['privates', 'stof_doctrine_extensions.listener.sluggable', 'getStofDoctrineExtensions_Listener_SluggableService', true],
            'stof_doctrine_extensions.listener.timestampable' => ['privates', 'stof_doctrine_extensions.listener.timestampable', 'getStofDoctrineExtensions_Listener_TimestampableService', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => '?',
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => '?',
            'stof_doctrine_extensions.listener.sluggable' => '?',
            'stof_doctrine_extensions.listener.timestampable' => '?',
        ]), [0 => 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 1 => 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 2 => [0 => [0 => 'loadClassMetadata'], 1 => 'doctrine.orm.default_listeners.attach_entity_listeners'], 3 => [0 => [0 => 'prePersist'], 1 => 'stof_doctrine_extensions.listener.timestampable'], 4 => [0 => [0 => 'onFlush'], 1 => 'stof_doctrine_extensions.listener.timestampable'], 5 => [0 => [0 => 'loadClassMetadata'], 1 => 'stof_doctrine_extensions.listener.timestampable'], 6 => [0 => [0 => 'prePersist'], 1 => 'stof_doctrine_extensions.listener.sluggable'], 7 => [0 => [0 => 'onFlush'], 1 => 'stof_doctrine_extensions.listener.sluggable'], 8 => [0 => [0 => 'loadClassMetadata'], 1 => 'stof_doctrine_extensions.listener.sluggable']]);
    }
}