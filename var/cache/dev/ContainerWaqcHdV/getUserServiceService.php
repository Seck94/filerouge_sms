<?php

namespace ContainerWaqcHdV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\service\UserService' shared autowired service.
     *
     * @return \App\service\UserService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/service/UserService.php';

        return $container->privates['App\\service\\UserService'] = new \App\service\UserService(($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->services['serializer'] ?? $container->getSerializerService()), ($container->privates['api_platform.validator'] ?? $container->load('getApiPlatform_ValidatorService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Repository\\ProfilRepository'] ?? $container->load('getProfilRepositoryService')));
    }
}
