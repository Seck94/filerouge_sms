<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'app_admin_addadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::addAdmin'], [], [['text', '/api/admin/admins']], [], []],
    'app_apprenant_addapprenant' => [[], ['_controller' => 'App\\Controller\\ApprenantController::addApprenant'], [], [['text', '/api/admin/apprenants']], [], []],
    'app_cm_addcm' => [[], ['_controller' => 'App\\Controller\\CMController::addCM'], [], [['text', '/api/admin/cms']], [], []],
    'app_formateur_addformateur' => [[], ['_controller' => 'App\\Controller\\FormateurController::addFormateur'], [], [['text', '/api/admin/formateurs']], [], []],
    'app_formateur_updateformateur' => [['id'], ['__controller' => 'App\\Controller\\FormateurController::updateFormateur', '__api_resource_class' => 'App\\Entity\\Formateur', '__api_collection_operation_name' => 'edit_formateur', 'id' => null, '_controller' => 'App\\Controller\\FormateurController::updateFormateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/formateurs']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'api_users_add_user_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], [], [['text', '/api/admin/users']], [], []],
    'api_users_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/users']], [], []],
    'api_users_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get', 'id' => null], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_users_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/users']], [], []],
    'api_apprenants_post_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'post'], [], [['text', '/api/admin/apprenants']], [], []],
    'api_apprenants_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/apprenants']], [], []],
    'api_apprenants_get_apprenants_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get_apprenants'], [], [['text', '/api/apprenants']], [], []],
    'api_apprenants_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get', 'id' => null], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/apprenants']], [], []],
    'api_apprenants_get_apprenant_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get_apprenant'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_apprenants_delete_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/apprenants']], [], []],
    'api_apprenants_patch_item' => [['id'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/apprenants']], [], []],
    'api_apprenants_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/apprenants']], [], []],
    'api_a_d_m_i_ns_add_apprenant_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_collection_operation_name' => 'add_apprenant'], [], [['text', '/api/admin/admins']], [], []],
    'api_a_d_m_i_ns_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/admins']], [], []],
    'api_a_d_m_i_ns_get_apprenants_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_collection_operation_name' => 'get_apprenants'], [], [['text', '/api/admins']], [], []],
    'api_a_d_m_i_ns_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'get', 'id' => null], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/admins']], [], []],
    'api_a_d_m_i_ns_get_apprenant_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'get_apprenant'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/admins']], [], []],
    'api_a_d_m_i_ns_delete_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/admins']], [], []],
    'api_a_d_m_i_ns_patch_item' => [['id'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'patch'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/admins']], [], []],
    'api_a_d_m_i_ns_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/admins']], [], []],
    'api_profils_post_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], [], [['text', '/api/admin/profils']], [], []],
    'api_profils_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/profils']], [], []],
    'api_profils_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_delete_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_patch_item' => [['id'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_profils_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profils']], [], []],
    'api_c_ms_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/c_ms']], [], []],
    'api_c_ms_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/c_ms']], [], []],
    'api_c_ms_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/c_ms']], [], []],
    'api_c_ms_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/c_ms']], [], []],
    'api_c_ms_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/c_ms']], [], []],
    'api_c_ms_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/c_ms']], [], []],
    'api_formateurs_add_formateur_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'add_formateur'], [], [['text', '/api/admin/formateurs']], [], []],
    'api_formateurs_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/formateurs']], [], []],
    'api_formateurs_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get', 'id' => null], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/formateurs']], [], []],
    'api_formateurs_get_formateur_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get_formateur'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_delete_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/formateurs']], [], []],
    'api_formateurs_patch_item' => [['id'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/formateurs']], [], []],
    'authentication_token' => [[], [], [], [['text', '/api/login_check']], [], []],
];
