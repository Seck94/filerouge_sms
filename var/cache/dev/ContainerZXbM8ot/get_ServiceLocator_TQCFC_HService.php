<?php

namespace ContainerZXbM8ot;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TQCFC_HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tQCFC.H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tQCFC.H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CMRepository' => ['privates', 'App\\Repository\\CMRepository', 'getCMRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'update' => ['privates', 'App\\service\\UserService', 'getUserServiceService', true],
        ], [
            'CMRepository' => 'App\\Repository\\CMRepository',
            'manager' => '?',
            'update' => 'App\\service\\UserService',
        ]);
    }
}
