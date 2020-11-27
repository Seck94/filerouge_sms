<?php

namespace ContainerMgq3OXN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FdjmwBOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fdjmwBO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fdjmwBO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cmp' => ['privates', 'App\\Repository\\CompetenceRepository', 'getCompetenceRepositoryService', true],
            'grpcmp' => ['privates', 'App\\Repository\\GroupeCompetenceRepository', 'getGroupeCompetenceRepository3Service', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'cmp' => 'App\\Repository\\CompetenceRepository',
            'grpcmp' => 'App\\Repository\\GroupeCompetenceRepository',
            'manager' => '?',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
