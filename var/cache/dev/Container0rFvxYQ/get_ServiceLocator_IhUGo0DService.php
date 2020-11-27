<?php

namespace Container0rFvxYQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IhUGo0DService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ihUGo0D' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ihUGo0D'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'rep_cmp' => ['privates', 'App\\Repository\\CompetenceRepository', 'getCompetenceRepositoryService', true],
            'rep_niveau' => ['privates', 'App\\Repository\\NiveauRepository', 'getNiveauRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'manager' => '?',
            'rep_cmp' => 'App\\Repository\\CompetenceRepository',
            'rep_niveau' => 'App\\Repository\\NiveauRepository',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
