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
                            .'|a(?'
                                .'|rametrage(?'
                                    .'|(*:205)'
                                    .'|/(?'
                                        .'|familleOuvrage(?'
                                            .'|(*:234)'
                                            .'|/(?'
                                                .'|new(*:249)'
                                                .'|([^/]++)(?'
                                                    .'|(*:268)'
                                                    .'|/edit(*:281)'
                                                    .'|(*:289)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|type(?'
                                            .'|Equipement(?'
                                                .'|(*:320)'
                                                .'|/(?'
                                                    .'|new(*:335)'
                                                    .'|([^/]++)(?'
                                                        .'|(*:354)'
                                                        .'|/edit(*:367)'
                                                        .'|(*:375)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|Ouvrage(?'
                                                .'|(*:396)'
                                                .'|/(?'
                                                    .'|new(*:411)'
                                                    .'|([^/]++)(?'
                                                        .'|(*:430)'
                                                        .'|/edit(*:443)'
                                                        .'|(*:451)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|utilisateurs(?'
                                            .'|(*:478)'
                                            .'|/(?'
                                                .'|new(*:493)'
                                                .'|([^/]++)(?'
                                                    .'|(*:512)'
                                                    .'|/edit(?'
                                                        .'|(*:528)'
                                                        .'|/mot_de_passe(*:549)'
                                                    .')'
                                                    .'|(*:558)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ssage(?'
                                    .'|(*:579)'
                                    .'|/(?'
                                        .'|recherche(*:600)'
                                        .'|creation(*:616)'
                                        .'|([^/]++)(?'
                                            .'|(*:635)'
                                            .'|/(?'
                                                .'|edit(*:651)'
                                                .'|archive(*:666)'
                                            .')'
                                            .'|(*:675)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|ortail(*:693)'
                            .'|rofil(*:706)'
                        .')'
                        .'|mention(*:722)'
                        .'|contact(*:737)'
                        .'|inscription(*:756)'
                        .'|log(?'
                            .'|in(*:772)'
                            .'|out(*:783)'
                        .')'
                    .')'
                    .'|(*:793)'
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
        205 => [[['_route' => 'parametrage', '_controller' => 'App\\Controller\\AutresElementsController::parametrage'], ['_locale'], null, null, false, false, null]],
        234 => [[['_route' => 'famille_ouvrage_index', '_controller' => 'App\\Controller\\FamilleOuvrageController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        249 => [[['_route' => 'famille_ouvrage_new', '_controller' => 'App\\Controller\\FamilleOuvrageController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        268 => [[['_route' => 'famille_ouvrage_show', '_controller' => 'App\\Controller\\FamilleOuvrageController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        281 => [[['_route' => 'famille_ouvrage_edit', '_controller' => 'App\\Controller\\FamilleOuvrageController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        289 => [[['_route' => 'famille_ouvrage_delete', '_controller' => 'App\\Controller\\FamilleOuvrageController::delete'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        320 => [[['_route' => 'type_equipement_index', '_controller' => 'App\\Controller\\TypeEquipementController::indexTypeEquipement'], ['_locale'], ['GET' => 0], null, true, false, null]],
        335 => [[['_route' => 'type_equipement_new', '_controller' => 'App\\Controller\\TypeEquipementController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        354 => [[['_route' => 'type_equipement_show', '_controller' => 'App\\Controller\\TypeEquipementController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        367 => [[['_route' => 'type_equipement_edit', '_controller' => 'App\\Controller\\TypeEquipementController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        375 => [[['_route' => 'type_equipement_delete', '_controller' => 'App\\Controller\\TypeEquipementController::delete'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        396 => [[['_route' => 'type_ouvrage_index', '_controller' => 'App\\Controller\\TypeOuvrageController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        411 => [[['_route' => 'type_ouvrage_new', '_controller' => 'App\\Controller\\TypeOuvrageController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        430 => [[['_route' => 'type_ouvrage_show', '_controller' => 'App\\Controller\\TypeOuvrageController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        443 => [[['_route' => 'type_ouvrage_edit', '_controller' => 'App\\Controller\\TypeOuvrageController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        451 => [[['_route' => 'type_ouvrage_delete', '_controller' => 'App\\Controller\\TypeOuvrageController::delete'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        478 => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        493 => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        512 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        528 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        549 => [[['_route' => 'user_edit_password', '_controller' => 'App\\Controller\\UserController::editMotDePasse'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        558 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        579 => [[['_route' => 'passage_a_gue_index', '_controller' => 'App\\Controller\\PassageController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        600 => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\PassageController::recherche'], ['_locale'], null, null, false, false, null]],
        616 => [[['_route' => 'creation', '_controller' => 'App\\Controller\\PassageController::creation'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        635 => [[['_route' => 'passage_a_gue_show', '_controller' => 'App\\Controller\\PassageController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        651 => [[['_route' => 'passage_a_gue_edit', '_controller' => 'App\\Controller\\PassageController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        666 => [[['_route' => 'passage_a_gue_archive', '_controller' => 'App\\Controller\\PassageController::archive'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        675 => [[['_route' => 'passage_a_gue_delete', '_controller' => 'App\\Controller\\PassageController::delete'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        693 => [[['_route' => 'portail', '_controller' => 'App\\Controller\\AutresElementsController::portail'], ['_locale'], null, null, false, false, null]],
        706 => [[['_route' => 'profil', '_controller' => 'App\\Controller\\SecurityController::profil'], ['_locale'], null, null, false, false, null]],
        722 => [[['_route' => 'mention', '_controller' => 'App\\Controller\\AutresElementsController::mention'], ['_locale'], null, null, false, false, null]],
        737 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\AutresElementsController::contact'], ['_locale'], null, null, false, false, null]],
        756 => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], ['_locale'], null, null, false, false, null]],
        772 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], ['_locale'], null, null, false, false, null]],
        783 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], ['_locale'], null, null, false, false, null]],
        793 => [
            [['_route' => 'change_locale', '_controller' => 'App\\Controller\\AutresElementsController::changeLocale'], ['locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
