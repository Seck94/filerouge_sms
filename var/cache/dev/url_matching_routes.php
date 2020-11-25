<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/admin/admins' => [
            [['_route' => 'app_admin_addadmin', '_controller' => 'App\\Controller\\AdminController::addAdmin'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_a_d_m_i_ns_add_apprenant_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_collection_operation_name' => 'add_apprenant'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_a_d_m_i_ns_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/apprenants' => [
            [['_route' => 'app_apprenant_addapprenant', '_controller' => 'App\\Controller\\ApprenantController::addApprenant'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_apprenants_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/cms' => [
            [['_route' => 'app_cm_addcm', '_controller' => 'App\\Controller\\CMController::addCM'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_c_ms_add_formateur_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'add_formateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_c_ms_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/competence' => [[['_route' => 'competence', '_controller' => 'App\\Controller\\CompetenceController::index'], null, null, null, false, false, null]],
        '/api/admin/formateurs' => [
            [['_route' => 'app_formateur_addformateur', '_controller' => 'App\\Controller\\FormateurController::addFormateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_formateurs_add_formateur_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'add_formateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_formateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/groupecompetences' => [
            [['_route' => 'app_groupecompetence_addgroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::addGroupecompetence', '__api_resource_class' => 'App\\Entity\\GroupeCompetence', '__api_collection_operation_name' => 'add_groupecompetence', '_controller' => 'App\\Controller\\GroupeCompetenceController::addGroupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_groupecompetence_showgroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::showGroupecompetence', '__api_resource_class' => 'App\\Entity\\GroupeCompetence', '__api_collection_operation_name' => 'show_groupecompetence', '_controller' => 'App\\Controller\\GroupeCompetenceController::showGroupecompetence'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupe_competences_add_groupecompetence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'add_groupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupe_competences_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_niveaux_add_groupecompetence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'add_groupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_niveaux_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/referentiel' => [[['_route' => 'referentiel', '_controller' => 'App\\Controller\\ReferentielController::index'], null, null, null, false, false, null]],
        '/api/admin/users' => [
            [['_route' => 'api_users_add_user_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/competences' => [
            [['_route' => 'api_competences_add_competence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'add_competence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/apprenants' => [[['_route' => 'api_apprenants_get_apprenants_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get_apprenants'], null, ['GET' => 0], null, false, false, null]],
        '/api/admins' => [[['_route' => 'api_a_d_m_i_ns_get_apprenants_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_collection_operation_name' => 'get_apprenants'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/profils' => [
            [['_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/referentiels' => [
            [['_route' => 'api_referentiels_add_referentiel_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'add_referentiel'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/referentiels/groupecompetences' => [[['_route' => 'api_referentiels_show_referentiel_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'show_referentiel_groupecompetence'], null, ['GET' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/admin/(?'
                        .'|admins/([^/]++)(*:74)'
                        .'|cms/([^/]++)(*:93)'
                        .'|formateurs/([^/]++)(*:119)'
                        .'|groupecompetences/([^/]++)(*:153)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:190)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:221)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:263)'
                                .'|mpetences/([^/]++)/groupe_competences(?'
                                    .'|(?:\\.([^/]++))?(*:326)'
                                    .'|/([^/]++)/competences(?:\\.([^/]++))?(*:370)'
                                .')'
                            .')'
                            .'|ms/(\\d+)(*:388)'
                        .')'
                        .'|a(?'
                            .'|dmin(?'
                                .'|/(?'
                                    .'|groupecompetences/([^/]++)(?'
                                        .'|(*:441)'
                                    .')'
                                    .'|users(?'
                                        .'|(?:/([^/]++))?(*:472)'
                                        .'|/([^/]++)(*:489)'
                                    .')'
                                    .'|c(?'
                                        .'|ompetences/([^/]++)(?'
                                            .'|(*:524)'
                                        .')'
                                        .'|ms(?'
                                            .'|(?:/([^/]++))?(*:552)'
                                            .'|/([^/]++)(?'
                                                .'|(*:572)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|a(?'
                                        .'|pprenants(?'
                                            .'|(?:/([^/]++))?(*:613)'
                                            .'|/([^/]++)(?'
                                                .'|(*:633)'
                                            .')'
                                        .')'
                                        .'|dmins(?'
                                            .'|(?:/([^/]++))?(*:665)'
                                            .'|/([^/]++)(?'
                                                .'|(*:685)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|profils/([^/]++)(?'
                                        .'|(*:715)'
                                    .')'
                                    .'|referentiels/([^/]++)(?'
                                        .'|(*:748)'
                                    .')'
                                    .'|formateurs(?'
                                        .'|(?:/([^/]++))?(*:784)'
                                        .'|/([^/]++)(?'
                                            .'|(*:804)'
                                        .')'
                                    .')'
                                .')'
                                .'|s/(\\d+)(*:822)'
                            .')'
                            .'|pprenants/(\\d+)(*:846)'
                        .')'
                        .'|groupe_competences/([^/]++)/competences(?'
                            .'|(?:\\.([^/]++))?(*:912)'
                            .'|/([^/]++)/groupe_competences(?:\\.([^/]++))?(*:963)'
                        .')'
                        .'|niveaux/([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:1008)'
                        .')'
                        .'|formateurs/(\\d+)(*:1034)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'app_admin_updateadmin', '__controller' => 'App\\Controller\\AdminController::updateAdmin', '__api_resource_class' => 'App\\Entity\\ADMIN', '__api_collection_operation_name' => 'edit_admin', '_controller' => 'App\\Controller\\AdminController::updateAdmin'], ['id'], ['PUT' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_cm_updatecm', '__controller' => 'App\\Controller\\CMController::updateCm', '__api_resource_class' => 'App\\Entity\\CM', '__api_collection_operation_name' => 'edit_cm', '_controller' => 'App\\Controller\\CMController::updateCm'], ['id'], ['PUT' => 0], null, false, true, null]],
        119 => [[['_route' => 'app_formateur_updateformateur', '__controller' => 'App\\Controller\\FormateurController::updateFormateur', '__api_resource_class' => 'App\\Entity\\Formateur', '__api_collection_operation_name' => 'edit_formateur', '_controller' => 'App\\Controller\\FormateurController::updateFormateur'], ['id'], ['PUT' => 0], null, false, true, null]],
        153 => [[['_route' => 'app_groupecompetence_updategroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::updateGroupecompetence', '__api_resource_class' => 'App\\Entity\\GroupeCompetence', '__api_collection_operation_name' => 'update_groupecompetence', '_controller' => 'App\\Controller\\GroupeCompetenceController::updateGroupecompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        190 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        221 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        263 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        326 => [[['_route' => 'api_competences_groupe_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_subresource_operation_name' => 'api_competences_groupe_competences_get_subresource', '_api_subresource_context' => ['property' => 'groupeCompetences', 'identifiers' => [['id', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_groupe_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        370 => [[['_route' => 'api_competences_groupe_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_competences_groupe_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'Competence', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupeCompetences', 'App\\Entity\\GroupeCompetence', true]], 'collection' => true, 'operationId' => 'api_competences_groupe_competences_competences_get_subresource']], ['id', 'groupeCompetences', '_format'], ['GET' => 0], null, false, true, null]],
        388 => [[['_route' => 'api_c_ms_get_formateur_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null]],
        441 => [
            [['_route' => 'api_groupe_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupe_competences_update_groupecompetence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'update_groupecompetence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        472 => [[['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        489 => [[['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null]],
        524 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_competences_update_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'update_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        552 => [[['_route' => 'api_c_ms_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        572 => [
            [['_route' => 'api_c_ms_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        613 => [[['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        633 => [
            [['_route' => 'api_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        665 => [[['_route' => 'api_a_d_m_i_ns_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        685 => [
            [['_route' => 'api_a_d_m_i_ns_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_a_d_m_i_ns_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_a_d_m_i_ns_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        715 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        748 => [
            [['_route' => 'api_referentiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_update_referentiel_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'update_referentiel'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        784 => [[['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        804 => [
            [['_route' => 'api_formateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        822 => [[['_route' => 'api_a_d_m_i_ns_get_apprenant_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        846 => [[['_route' => 'api_apprenants_get_apprenant_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        912 => [[['_route' => 'api_groupe_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_groupe_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'Competence', 'identifiers' => [['id', 'App\\Entity\\GroupeCompetence', true]], 'collection' => true, 'operationId' => 'api_groupe_competences_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        963 => [[['_route' => 'api_groupe_competences_competences_groupe_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_subresource_operation_name' => 'api_groupe_competences_competences_groupe_competences_get_subresource', '_api_subresource_context' => ['property' => 'groupeCompetences', 'identifiers' => [['id', 'App\\Entity\\GroupeCompetence', true], ['Competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_groupe_competences_competences_groupe_competences_get_subresource']], ['id', 'Competence', '_format'], ['GET' => 0], null, false, true, null]],
        1008 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1034 => [
            [['_route' => 'api_formateurs_get_formateur_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
