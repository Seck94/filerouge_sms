<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerZV9yWPI/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerZV9yWPI/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerZV9yWPI/getValidator_ExpressionService.php';
require __DIR__.'/ContainerZV9yWPI/getValidator_EmailService.php';
require __DIR__.'/ContainerZV9yWPI/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerZV9yWPI/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerZV9yWPI/getTwigService.php';
require __DIR__.'/ContainerZV9yWPI/getSession_Storage_NativeService.php';
require __DIR__.'/ContainerZV9yWPI/getSessionService.php';
require __DIR__.'/ContainerZV9yWPI/getServicesResetterService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_PasswordEncoderService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Firewall_Map_Context_LoginService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_EncoderFactory_GenericService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_ContextListener_0Service.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Authentication_Provider_Guard_ApiService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Authentication_Provider_Dao_LoginService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Authentication_Listener_Json_LoginService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Authentication_Listener_Guard_ApiService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Authentication_Listener_Anonymous_MainService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Authentication_Listener_Anonymous_LoginService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_Authentication_Listener_Anonymous_ApiService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerZV9yWPI/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerZV9yWPI/getSecrets_VaultService.php';
require __DIR__.'/ContainerZV9yWPI/getRouting_LoaderService.php';
require __DIR__.'/ContainerZV9yWPI/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerZV9yWPI/getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService.php';
require __DIR__.'/ContainerZV9yWPI/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/ContainerZV9yWPI/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/ContainerZV9yWPI/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/ContainerZV9yWPI/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerZV9yWPI/getFilesystemService.php';
require __DIR__.'/ContainerZV9yWPI/getErrorControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerZV9yWPI/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerZV9yWPI/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_Security_Voter_Security_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerZV9yWPI/getTagVoterService.php';
require __DIR__.'/ContainerZV9yWPI/getReferentielVoterService.php';
require __DIR__.'/ContainerZV9yWPI/getProfilVoterService.php';
require __DIR__.'/ContainerZV9yWPI/getGroupetagVoterService.php';
require __DIR__.'/ContainerZV9yWPI/getGroupeCompetenceVoterService.php';
require __DIR__.'/ContainerZV9yWPI/getCompetenceVoterService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerZV9yWPI/getContainer_GetenvService.php';
require __DIR__.'/ContainerZV9yWPI/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerZV9yWPI/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerZV9yWPI/getCacheClearerService.php';
require __DIR__.'/ContainerZV9yWPI/getCache_SystemClearerService.php';
require __DIR__.'/ContainerZV9yWPI/getCache_SystemService.php';
require __DIR__.'/ContainerZV9yWPI/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerZV9yWPI/getCache_AppClearerService.php';
require __DIR__.'/ContainerZV9yWPI/getCache_AppService.php';
require __DIR__.'/ContainerZV9yWPI/getCache_AnnotationsService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_ValidatorService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Swagger_Action_UiService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Listener_View_WriteService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Listener_View_ValidateService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Listener_View_SerializeService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Listener_View_RespondService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Listener_Exception_ValidationService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Listener_ExceptionService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Jsonld_Action_ContextService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Doctrine_Orm_QueryExtension_OrderService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Doctrine_Orm_QueryExtension_FilterService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Doctrine_Orm_DataPersisterService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Action_PlaceholderService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Action_NotFoundService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Action_ExceptionService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Action_EntrypointService.php';
require __DIR__.'/ContainerZV9yWPI/getApiPlatform_Action_DocumentationService.php';
require __DIR__.'/ContainerZV9yWPI/getAnnotations_CacheService.php';
require __DIR__.'/ContainerZV9yWPI/getAnnotatedAppEntityUserApiPlatformCoreBridgeDoctrineOrmFilterBooleanFilterService.php';
require __DIR__.'/ContainerZV9yWPI/getAnnotatedAppEntityProfilApiPlatformCoreBridgeDoctrineOrmFilterBooleanFilterService.php';
require __DIR__.'/ContainerZV9yWPI/getTemplateControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getRedirectControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getUserServiceService.php';
require __DIR__.'/ContainerZV9yWPI/getUserRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getTagRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getReferentielRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getProfilRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getNiveauRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getLivrablePartielRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getGroupeTagRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getGroupeCompetenceRepository2Service.php';
require __DIR__.'/ContainerZV9yWPI/getFormateurRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getCompetenceRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getCMRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getApprenantRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getAdminRepository2Service.php';
require __DIR__.'/ContainerZV9yWPI/getADMINRepositoryService.php';
require __DIR__.'/ContainerZV9yWPI/getUserDataPersisterService.php';
require __DIR__.'/ContainerZV9yWPI/getReferentielControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getGroupetagControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getGroupeCompetenceControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getFormateurControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getCompetenceControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getCMControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getApprenantControllerService.php';
require __DIR__.'/ContainerZV9yWPI/getAdminControllerService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_WaPTUCService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_TQCFC_HService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_P4futVMService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_Lb3OZhVService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_LaWtL56Service.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_IhUGo0DService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_Hall1zcService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_HPoglkxService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_G9CqTPpService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_FdjmwBOService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_Beq5mCoService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_M3HL8piService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_Fw7pQz3Service.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_FidDLBmService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_EFPYbVFService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_C9JCBPCService.php';
require __DIR__.'/ContainerZV9yWPI/get_ServiceLocator_19ps0qCService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\ApiPlatformBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\AdminController';
$classes[] = 'App\Controller\ApprenantController';
$classes[] = 'App\Controller\CMController';
$classes[] = 'App\Controller\CompetenceController';
$classes[] = 'App\Controller\FormateurController';
$classes[] = 'App\Controller\GroupeCompetenceController';
$classes[] = 'App\Controller\GroupetagController';
$classes[] = 'App\Controller\ReferentielController';
$classes[] = 'App\DataPersister\UserDataPersister';
$classes[] = 'App\Repository\ADMINRepository';
$classes[] = 'App\Repository\AdminRepository';
$classes[] = 'App\Repository\ApprenantRepository';
$classes[] = 'App\Repository\CMRepository';
$classes[] = 'App\Repository\CompetenceRepository';
$classes[] = 'App\Repository\FormateurRepository';
$classes[] = 'App\Repository\GroupeCompetenceRepository';
$classes[] = 'App\Repository\GroupeTagRepository';
$classes[] = 'App\Repository\LivrablePartielRepository';
$classes[] = 'App\Repository\NiveauRepository';
$classes[] = 'App\Repository\ProfilRepository';
$classes[] = 'App\Repository\ReferentielRepository';
$classes[] = 'App\Repository\TagRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\service\UserService';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'ApiPlatform\Core\Documentation\Action\DocumentationAction';
$classes[] = 'ApiPlatform\Core\Action\EntrypointAction';
$classes[] = 'ApiPlatform\Core\Action\ExceptionAction';
$classes[] = 'ApiPlatform\Core\Action\NotFoundAction';
$classes[] = 'ApiPlatform\Core\Action\PlaceholderAction';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension';
$classes[] = 'ApiPlatform\Core\DataProvider\Pagination';
$classes[] = 'ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener';
$classes[] = 'ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Core\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener';
$classes[] = 'ApiPlatform\Core\Identifier\IdentifierConverter';
$classes[] = 'ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer';
$classes[] = 'ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer';
$classes[] = 'ApiPlatform\Core\Api\CachedIdentifiersExtractor';
$classes[] = 'ApiPlatform\Core\Api\IdentifiersExtractor';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver';
$classes[] = 'ApiPlatform\Core\JsonSchema\TypeFactory';
$classes[] = 'ApiPlatform\Core\JsonLd\Action\ContextAction';
$classes[] = 'ApiPlatform\Core\JsonLd\ContextBuilder';
$classes[] = 'ApiPlatform\Core\EventListener\ExceptionListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener';
$classes[] = 'ApiPlatform\Core\EventListener\AddFormatListener';
$classes[] = 'Negotiation\Negotiator';
$classes[] = 'ApiPlatform\Core\EventListener\DeserializeListener';
$classes[] = 'ApiPlatform\Core\EventListener\ReadListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainCollectionDataProvider';
$classes[] = 'ApiPlatform\Core\EventListener\RespondListener';
$classes[] = 'ApiPlatform\Core\EventListener\SerializeListener';
$classes[] = 'ApiPlatform\Core\Validator\EventListener\ValidateListener';
$classes[] = 'ApiPlatform\Core\Filter\QueryParameterValidateListener';
$classes[] = 'ApiPlatform\Core\EventListener\WriteListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister';
$classes[] = 'ApiPlatform\Core\DataPersister\ChainDataPersister';
$classes[] = 'ApiPlatform\Core\Metadata\Extractor\XmlExtractor';
$classes[] = 'ApiPlatform\Core\Metadata\Extractor\YamlExtractor';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\FormatsResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\PhpDocResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\InputOutputResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\PathResolver\CustomOperationPathResolver';
$classes[] = 'ApiPlatform\Core\PathResolver\OperationPathResolver';
$classes[] = 'ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator';
$classes[] = 'ApiPlatform\Core\Api\ResourceClassResolver';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\Router';
$classes[] = 'ApiPlatform\Core\Security\EventListener\DenyAccessListener';
$classes[] = 'ApiPlatform\Core\Security\ResourceAccessChecker';
$classes[] = 'ApiPlatform\Core\Serializer\SerializerFilterContextBuilder';
$classes[] = 'ApiPlatform\Core\Serializer\SerializerContextBuilder';
$classes[] = 'ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory';
$classes[] = 'ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Validator';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainItemDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'App\Security\Voter\CompetenceVoter';
$classes[] = 'App\Security\Voter\GroupeCompetenceVoter';
$classes[] = 'App\Security\Voter\GroupetagVoter';
$classes[] = 'App\Security\Voter\ProfilVoter';
$classes[] = 'App\Security\Voter\ReferentielVoter';
$classes[] = 'App\Security\Voter\TagVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\ApiLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Guard\GuardAuthenticatorHandler';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\Firewall\UsernamePasswordJsonAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Encoder\EncoderFactory';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'ApiPlatform\Core\Security\Core\Authorization\ExpressionLanguageProvider';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Encoder\UserPasswordEncoder';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\UserChecker';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer';
$classes[] = 'ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\EntrypointNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\ErrorNormalizer';
$classes[] = 'ApiPlatform\Core\Problem\Serializer\ErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer';
$classes[] = 'ApiPlatform\Core\Serializer\ItemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\PartialCollectionViewNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\CollectionNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'ApiPlatform\Core\JsonLd\Serializer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'ApiPlatform\Core\Serializer\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Psr\Cache\CacheItemPoolInterface';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\WebLinkExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';

Preloader::preload($classes);
