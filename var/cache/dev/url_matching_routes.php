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
        '/api/admin/competences' => [
            [['_route' => 'app_competence_addcompetence', '__controller' => 'App\\Controller\\CompetenceController::addCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'add_competence', '_controller' => 'App\\Controller\\CompetenceController::addCompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_add_competence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'add_competence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/Competences' => [[['_route' => 'app_competence_showcompetence', '__controller' => 'App\\Controller\\CompetenceController::showCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'show_Competence', '_controller' => 'App\\Controller\\CompetenceController::showCompetence'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/formateurs' => [
            [['_route' => 'app_formateur_addformateur', '_controller' => 'App\\Controller\\FormateurController::addFormateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_formateurs_add_formateur_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'add_formateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_formateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/groupecompetences' => [
            [['_route' => 'app_groupecompetence_addgroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::addGroupecompetence', '__api_resource_class' => 'App\\Entity\\GroupeCompetence', '__api_collection_operation_name' => 'add_groupecompetence', '_controller' => 'App\\Controller\\GroupeCompetenceController::addGroupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupe_competences_add_groupecompetence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'add_groupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_niveaux_add_groupecompetence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'add_groupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_niveaux_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/admin/groupecompetences' => [[['_route' => 'app_groupecompetence_showgroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::showGroupecompetence', '__api_resource_class' => 'App\\Entity\\GroupeCompetence', '__api_collection_operation_name' => 'show_groupecompetence', '_controller' => 'App\\Controller\\GroupeCompetenceController::showGroupecompetence'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/groupetags' => [
            [['_route' => 'app_groupetag_addgroupetag', '__controller' => 'App\\Controller\\GroupetagController::addGroupetag', '__api_resource_class' => 'App\\Entity\\GroupeTag', '__api_collection_operation_name' => 'add_groupetag', '_controller' => 'App\\Controller\\GroupetagController::addGroupetag'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupe_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/referentiel' => [[['_route' => 'referentiel', '_controller' => 'App\\Controller\\ReferentielController::index'], null, null, null, false, false, null]],
        '/api/admin/referentiels' => [
            [['_route' => 'app_referentiel_addreferentiel', '__controller' => 'App\\Controller\\ReferentielController::addReferentiel', '__api_resource_class' => 'App\\Entity\\Referentiel', '__api_collection_operation_name' => 'add_referentiel', '_controller' => 'App\\Controller\\ReferentielController::addReferentiel'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_add_referentiel_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'add_referentiel'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/groupecompetence' => [[['_route' => 'api_groupe_competences_api_questions_answer_get_subresource_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_collection_operation_name' => 'api_questions_answer_get_subresource'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/users' => [
            [['_route' => 'api_users_add_user_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/apprenants' => [[['_route' => 'api_apprenants_get_apprenants_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get_apprenants'], null, ['GET' => 0], null, false, false, null]],
        '/api/admins' => [[['_route' => 'api_a_d_m_i_ns_get_apprenants_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_collection_operation_name' => 'get_apprenants'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/profils' => [
            [['_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/tags' => [
            [['_route' => 'api_tags_add_groupecompetence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'add_groupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_tags_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/login_check' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/admin/(?'
                        .'|admins/([^/]++)(*:74)'
                        .'|c(?'
                            .'|ms/([^/]++)(*:96)'
                            .'|ompetences/([^/]++)(*:122)'
                        .')'
                        .'|formateurs/([^/]++)(*:150)'
                        .'|groupe(?'
                            .'|competences/([^/]++)(*:187)'
                            .'|tags/([^/]++)(*:208)'
                        .')'
                        .'|referentiels/([^/]++)(*:238)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:275)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:306)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:348)'
                                .'|mpetences/([^/]++)/groupe_competences(?'
                                    .'|(?:\\.([^/]++))?(*:411)'
                                    .'|/([^/]++)/competences(?:\\.([^/]++))?(*:455)'
                                .')'
                            .')'
                            .'|ms/(\\d+)(*:473)'
                        .')'
                        .'|groupe_(?'
                            .'|tags(?'
                                .'|(?:\\.([^/]++))?(*:514)'
                                .'|/([^/]++)/tags(?'
                                    .'|(?:\\.([^/]++))?(*:554)'
                                    .'|/([^/]++)/groupetags(?:\\.([^/]++))?(*:597)'
                                .')'
                            .')'
                            .'|competences/([^/]++)/competences(?'
                                .'|(?:\\.([^/]++))?(*:657)'
                                .'|/([^/]++)/groupe_competences(?:\\.([^/]++))?(*:708)'
                            .')'
                        .')'
                        .'|a(?'
                            .'|dmin(?'
                                .'|/(?'
                                    .'|groupe(?'
                                        .'|tags/([^/]++)(?'
                                            .'|/tags(*:763)'
                                            .'|(*:771)'
                                        .')'
                                        .'|competences/([^/]++)(?'
                                            .'|(*:803)'
                                        .')'
                                    .')'
                                    .'|users(?'
                                        .'|(?:/([^/]++))?(*:835)'
                                        .'|/([^/]++)(*:852)'
                                    .')'
                                    .'|c(?'
                                        .'|ompetences/([^/]++)(?'
                                            .'|(*:887)'
                                        .')'
                                        .'|ms(?'
                                            .'|(?:/([^/]++))?(*:915)'
                                            .'|/([^/]++)(?'
                                                .'|(*:935)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|a(?'
                                        .'|pprenants/([^/]++)(?'
                                            .'|(*:971)'
                                        .')'
                                        .'|dmins(?'
                                            .'|(?:/([^/]++))?(*:1002)'
                                            .'|/([^/]++)(?'
                                                .'|(*:1023)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|profils/([^/]++)(?'
                                        .'|/users(*:1060)'
                                        .'|(*:1069)'
                                    .')'
                                    .'|referentiels/(?'
                                        .'|groupecompetences(*:1112)'
                                        .'|([^/]++)(?'
                                            .'|(*:1132)'
                                        .')'
                                    .')'
                                    .'|tags/([^/]++)(?'
                                        .'|(*:1159)'
                                    .')'
                                    .'|formateurs(?'
                                        .'|(?:/([^/]++))?(*:1196)'
                                        .'|/([^/]++)(?'
                                            .'|(*:1217)'
                                        .')'
                                    .')'
                                .')'
                                .'|s/(\\d+)(*:1236)'
                            .')'
                            .'|pprenants/(\\d+)(*:1261)'
                        .')'
                        .'|niveaux/([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:1307)'
                        .')'
                        .'|profils/([^/]++)/users(?:\\.([^/]++))?(*:1354)'
                        .'|referentiels/([^/]++)/groupe_competences(?'
                            .'|(?:\\.([^/]++))?(*:1421)'
                            .'|/([^/]++)/competences(?'
                                .'|(?:\\.([^/]++))?(*:1469)'
                                .'|/([^/]++)/groupe_competences(?:\\.([^/]++))?(*:1521)'
                            .')'
                        .')'
                        .'|tags/([^/]++)/groupetags(?'
                            .'|(?:\\.([^/]++))?(*:1574)'
                            .'|/([^/]++)/tags(?:\\.([^/]++))?(*:1612)'
                        .')'
                        .'|formateurs/(\\d+)(*:1638)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'app_admin_updateadmin', '__controller' => 'App\\Controller\\AdminController::updateAdmin', '__api_resource_class' => 'App\\Entity\\ADMIN', '__api_collection_operation_name' => 'edit_admin', '_controller' => 'App\\Controller\\AdminController::updateAdmin'], ['id'], ['PUT' => 0], null, false, true, null]],
        96 => [[['_route' => 'app_cm_updatecm', '__controller' => 'App\\Controller\\CMController::updateCm', '__api_resource_class' => 'App\\Entity\\CM', '__api_collection_operation_name' => 'edit_cm', '_controller' => 'App\\Controller\\CMController::updateCm'], ['id'], ['PUT' => 0], null, false, true, null]],
        122 => [[['_route' => 'app_competence_updatecompetence', '__controller' => 'App\\Controller\\CompetenceController::updateCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'update_competence', '_controller' => 'App\\Controller\\CompetenceController::updateCompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        150 => [[['_route' => 'app_formateur_updateformateur', '__controller' => 'App\\Controller\\FormateurController::updateFormateur', '__api_resource_class' => 'App\\Entity\\Formateur', '__api_collection_operation_name' => 'edit_formateur', '_controller' => 'App\\Controller\\FormateurController::updateFormateur'], ['id'], ['PUT' => 0], null, false, true, null]],
        187 => [[['_route' => 'app_groupecompetence_updategroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::updateGroupecompetence', '__api_resource_class' => 'App\\Entity\\GroupeCompetence', '__api_collection_operation_name' => 'update_groupecompetence', '_controller' => 'App\\Controller\\GroupeCompetenceController::updateGroupecompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        208 => [[['_route' => 'app_groupetag_updategroupetag', '__controller' => 'App\\Controller\\GroupetagController::updateGroupetag', '__api_resource_class' => 'App\\Entity\\GroupeTag', '__api_collection_operation_name' => 'update_groupetag', '_controller' => 'App\\Controller\\GroupetagController::updateGroupetag'], ['id'], ['PUT' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_referentiel_updatereferentiel', '__controller' => 'App\\Controller\\ReferentielController::updateReferentiel', '__api_resource_class' => 'App\\Entity\\Referentiel', '__api_collection_operation_name' => 'update_referentiel', '_controller' => 'App\\Controller\\ReferentielController::updateReferentiel'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        275 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        306 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        348 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        411 => [[['_route' => 'api_competences_groupe_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_subresource_operation_name' => 'api_competences_groupe_competences_get_subresource', '_api_subresource_context' => ['property' => 'groupeCompetences', 'identifiers' => [['id', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_groupe_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        455 => [[['_route' => 'api_competences_groupe_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_competences_groupe_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'Competence', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupeCompetences', 'App\\Entity\\GroupeCompetence', true]], 'collection' => true, 'operationId' => 'api_competences_groupe_competences_competences_get_subresource']], ['id', 'groupeCompetences', '_format'], ['GET' => 0], null, false, true, null]],
        473 => [[['_route' => 'api_c_ms_get_formateur_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null]],
        514 => [[['_route' => 'api_groupe_tags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
        554 => [[['_route' => 'api_groupe_tags_tags_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_subresource_operation_name' => 'api_groupe_tags_tags_get_subresource', '_api_subresource_context' => ['property' => 'tags', 'identifiers' => [['id', 'App\\Entity\\GroupeTag', true]], 'collection' => true, 'operationId' => 'api_groupe_tags_tags_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        597 => [[['_route' => 'api_groupe_tags_tags_groupetags_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_subresource_operation_name' => 'api_groupe_tags_tags_groupetags_get_subresource', '_api_subresource_context' => ['property' => 'groupetag', 'identifiers' => [['id', 'App\\Entity\\GroupeTag', true], ['tags', 'App\\Entity\\Tag', true]], 'collection' => true, 'operationId' => 'api_groupe_tags_tags_groupetags_get_subresource']], ['id', 'tags', '_format'], ['GET' => 0], null, false, true, null]],
        657 => [[['_route' => 'api_groupe_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_groupe_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'Competence', 'identifiers' => [['id', 'App\\Entity\\GroupeCompetence', true]], 'collection' => true, 'operationId' => 'api_groupe_competences_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        708 => [[['_route' => 'api_groupe_competences_competences_groupe_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_subresource_operation_name' => 'api_groupe_competences_competences_groupe_competences_get_subresource', '_api_subresource_context' => ['property' => 'groupeCompetences', 'identifiers' => [['id', 'App\\Entity\\GroupeCompetence', true], ['Competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_groupe_competences_competences_groupe_competences_get_subresource']], ['id', 'Competence', '_format'], ['GET' => 0], null, false, true, null]],
        763 => [[['_route' => 'api_groupe_tags_api_questions_answer_get_subresource_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'api_questions_answer_get_subresource'], ['id'], ['GET' => 0], null, false, false, null]],
        771 => [
            [['_route' => 'api_groupe_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        803 => [
            [['_route' => 'api_groupe_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupe_competences_update_groupecompetence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_item_operation_name' => 'update_groupecompetence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        835 => [[['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        852 => [[['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null]],
        887 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_competences_update_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'update_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        915 => [[['_route' => 'api_c_ms_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        935 => [
            [['_route' => 'api_c_ms_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        971 => [
            [['_route' => 'api_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1002 => [[['_route' => 'api_a_d_m_i_ns_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        1023 => [
            [['_route' => 'api_a_d_m_i_ns_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_a_d_m_i_ns_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_a_d_m_i_ns_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1060 => [[['_route' => 'api_profils_api_questions_answer_get_subresource_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'api_questions_answer_get_subresource'], ['id'], ['GET' => 0], null, false, false, null]],
        1069 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1112 => [[['_route' => 'api_referentiels_show_referentiel_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'show_referentiel_groupecompetence'], [], ['GET' => 0], null, false, false, null]],
        1132 => [
            [['_route' => 'api_referentiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_update_referentiel_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'update_referentiel'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1159 => [
            [['_route' => 'api_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tags_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1196 => [[['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        1217 => [
            [['_route' => 'api_formateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1236 => [[['_route' => 'api_a_d_m_i_ns_get_apprenant_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ADMIN', '_api_item_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        1261 => [[['_route' => 'api_apprenants_get_apprenant_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        1307 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1354 => [[['_route' => 'api_profils_users_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1421 => [[['_route' => 'api_referentiels_groupe_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_subresource_operation_name' => 'api_referentiels_groupe_competences_get_subresource', '_api_subresource_context' => ['property' => 'groupeCompetences', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupe_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1469 => [[['_route' => 'api_referentiels_groupe_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_referentiels_groupe_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'Competence', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupeCompetences', 'App\\Entity\\GroupeCompetence', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupe_competences_competences_get_subresource']], ['id', 'groupeCompetences', '_format'], ['GET' => 0], null, false, true, null]],
        1521 => [[['_route' => 'api_referentiels_groupe_competences_competences_groupe_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeCompetence', '_api_subresource_operation_name' => 'api_referentiels_groupe_competences_competences_groupe_competences_get_subresource', '_api_subresource_context' => ['property' => 'groupeCompetences', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupeCompetences', 'App\\Entity\\GroupeCompetence', true], ['Competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupe_competences_competences_groupe_competences_get_subresource']], ['id', 'groupeCompetences', 'Competence', '_format'], ['GET' => 0], null, false, true, null]],
        1574 => [[['_route' => 'api_tags_groupetags_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_subresource_operation_name' => 'api_tags_groupetags_get_subresource', '_api_subresource_context' => ['property' => 'groupetag', 'identifiers' => [['id', 'App\\Entity\\Tag', true]], 'collection' => true, 'operationId' => 'api_tags_groupetags_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1612 => [[['_route' => 'api_tags_groupetags_tags_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_subresource_operation_name' => 'api_tags_groupetags_tags_get_subresource', '_api_subresource_context' => ['property' => 'tags', 'identifiers' => [['id', 'App\\Entity\\Tag', true], ['groupetag', 'App\\Entity\\GroupeTag', true]], 'collection' => true, 'operationId' => 'api_tags_groupetags_tags_get_subresource']], ['id', 'groupetag', '_format'], ['GET' => 0], null, false, true, null]],
        1638 => [
            [['_route' => 'api_formateurs_get_formateur_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
