<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AutresElementsController::index'], null, null, null, false, false, null]],
        '/equipement/new' => [[['_route' => 'equipement_new', '_controller' => 'App\\Controller\\EquipementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/(?'
                        .'|p(?'
                            .'|arametrage(*:199)'
                            .'|ortail(*:213)'
                        .')'
                        .'|mention(*:229)'
                        .'|contact(*:244)'
                    .')'
                    .'|(*:253)'
                .')'
                .'|/equipement(?'
                    .'|(*:276)'
                    .'|/([^/]++)(?'
                        .'|(*:296)'
                        .'|/edit(*:309)'
                        .'|(*:317)'
                    .')'
                .')'
                .'|/([^/]++)/(?'
                    .'|p(?'
                        .'|a(?'
                            .'|rametrage/(?'
                                .'|familleOuvrage(?'
                                    .'|(*:378)'
                                    .'|/(?'
                                        .'|new(*:393)'
                                        .'|([^/]++)(?'
                                            .'|(*:412)'
                                            .'|/edit(*:425)'
                                            .'|(*:433)'
                                        .')'
                                    .')'
                                .')'
                                .'|type(?'
                                    .'|Equipement(?'
                                        .'|(*:464)'
                                        .'|/(?'
                                            .'|new(*:479)'
                                            .'|([^/]++)(?'
                                                .'|(*:498)'
                                                .'|/edit(*:511)'
                                                .'|(*:519)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|Ouvrage(?'
                                        .'|(*:540)'
                                        .'|/(?'
                                            .'|new(*:555)'
                                            .'|([^/]++)(?'
                                                .'|(*:574)'
                                                .'|/edit(*:587)'
                                                .'|(*:595)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|utilisateurs(?'
                                    .'|(*:622)'
                                    .'|/(?'
                                        .'|new(*:637)'
                                        .'|([^/]++)(?'
                                            .'|(*:656)'
                                            .'|/edit(?'
                                                .'|(*:672)'
                                                .'|/mot_de_passe(*:693)'
                                            .')'
                                            .'|(*:702)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|ssage(?'
                                .'|(*:722)'
                                .'|/(?'
                                    .'|recherche(*:743)'
                                    .'|creation(*:759)'
                                    .'|([^/]++)(?'
                                        .'|(*:778)'
                                        .'|/(?'
                                            .'|edit(*:794)'
                                            .'|archive(*:809)'
                                        .')'
                                        .'|(*:818)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|rofil(*:835)'
                    .')'
                    .'|inscription(*:855)'
                    .'|log(?'
                        .'|in(*:871)'
                        .'|out(*:882)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'parametrage', '_controller' => 'App\\Controller\\AutresElementsController::parametrage'], ['_locale'], null, null, false, false, null]],
        213 => [[['_route' => 'portail', '_controller' => 'App\\Controller\\AutresElementsController::portail'], ['_locale'], null, null, false, false, null]],
        229 => [[['_route' => 'mention', '_controller' => 'App\\Controller\\AutresElementsController::mention'], ['_locale'], null, null, false, false, null]],
        244 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\AutresElementsController::contact'], ['_locale'], null, null, false, false, null]],
        253 => [[['_route' => 'change_locale', '_controller' => 'App\\Controller\\AutresElementsController::changeLocale'], ['locale'], null, null, false, true, null]],
        276 => [[['_route' => 'equipement_index', '_controller' => 'App\\Controller\\EquipementController::index'], [], ['GET' => 0], null, true, false, null]],
        296 => [[['_route' => 'equipement_show', '_controller' => 'App\\Controller\\EquipementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'equipement_edit', '_controller' => 'App\\Controller\\EquipementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        317 => [[['_route' => 'equipement_delete', '_controller' => 'App\\Controller\\EquipementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        378 => [[['_route' => 'famille_ouvrage_index', '_controller' => 'App\\Controller\\FamilleOuvrageController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        393 => [[['_route' => 'famille_ouvrage_new', '_controller' => 'App\\Controller\\FamilleOuvrageController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [[['_route' => 'famille_ouvrage_show', '_controller' => 'App\\Controller\\FamilleOuvrageController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        425 => [[['_route' => 'famille_ouvrage_edit', '_controller' => 'App\\Controller\\FamilleOuvrageController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        433 => [[['_route' => 'famille_ouvrage_delete', '_controller' => 'App\\Controller\\FamilleOuvrageController::delete'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        464 => [[['_route' => 'type_equipement_index', '_controller' => 'App\\Controller\\TypeEquipementController::indexTypeEquipement'], ['_locale'], ['GET' => 0], null, true, false, null]],
        479 => [[['_route' => 'type_equipement_new', '_controller' => 'App\\Controller\\TypeEquipementController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        498 => [[['_route' => 'type_equipement_show', '_controller' => 'App\\Controller\\TypeEquipementController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        511 => [[['_route' => 'type_equipement_edit', '_controller' => 'App\\Controller\\TypeEquipementController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        519 => [[['_route' => 'type_equipement_delete', '_controller' => 'App\\Controller\\TypeEquipementController::delete'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        540 => [[['_route' => 'type_ouvrage_index', '_controller' => 'App\\Controller\\TypeOuvrageController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        555 => [[['_route' => 'type_ouvrage_new', '_controller' => 'App\\Controller\\TypeOuvrageController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        574 => [[['_route' => 'type_ouvrage_show', '_controller' => 'App\\Controller\\TypeOuvrageController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        587 => [[['_route' => 'type_ouvrage_edit', '_controller' => 'App\\Controller\\TypeOuvrageController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        595 => [[['_route' => 'type_ouvrage_delete', '_controller' => 'App\\Controller\\TypeOuvrageController::delete'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        622 => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        637 => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        656 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        672 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        693 => [[['_route' => 'user_edit_password', '_controller' => 'App\\Controller\\UserController::editMotDePasse'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        702 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        722 => [[['_route' => 'passage_a_gue_index', '_controller' => 'App\\Controller\\PassageController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        743 => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\PassageController::recherche'], ['_locale'], null, null, false, false, null]],
        759 => [[['_route' => 'creation', '_controller' => 'App\\Controller\\PassageController::creation'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        778 => [[['_route' => 'passage_a_gue_show', '_controller' => 'App\\Controller\\PassageController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        794 => [[['_route' => 'passage_a_gue_edit', '_controller' => 'App\\Controller\\PassageController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        809 => [[['_route' => 'passage_a_gue_archive', '_controller' => 'App\\Controller\\PassageController::archive'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        818 => [[['_route' => 'passage_a_gue_delete', '_controller' => 'App\\Controller\\PassageController::delete'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        835 => [[['_route' => 'profil', '_controller' => 'App\\Controller\\SecurityController::profil'], ['_locale'], null, null, false, false, null]],
        855 => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], ['_locale'], null, null, false, false, null]],
        871 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], ['_locale'], null, null, false, false, null]],
        882 => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], ['_locale'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
