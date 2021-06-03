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
        '/parametrage' => [[['_route' => 'parametrage', '_controller' => 'App\\Controller\\AutresElementsController::parametrage'], null, null, null, false, false, null]],
        '/portail' => [[['_route' => 'portail', '_controller' => 'App\\Controller\\AutresElementsController::portail'], null, null, null, false, false, null]],
        '/mention' => [[['_route' => 'mention', '_controller' => 'App\\Controller\\AutresElementsController::mention'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\AutresElementsController::contact'], null, null, null, false, false, null]],
        '/parametrage/familleOuvrage' => [[['_route' => 'famille_ouvrage_index', '_controller' => 'App\\Controller\\FamilleOuvrageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/parametrage/familleOuvrage/new' => [[['_route' => 'famille_ouvrage_new', '_controller' => 'App\\Controller\\FamilleOuvrageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/passage' => [[['_route' => 'passage_a_gue_index', '_controller' => 'App\\Controller\\PassageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/passage/recherche' => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\PassageController::recherche'], null, null, null, false, false, null]],
        '/passage/creation' => [[['_route' => 'creation', '_controller' => 'App\\Controller\\PassageController::creation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\SecurityController::profil'], null, null, null, false, false, null]],
        '/parametrage/typeEquipement' => [[['_route' => 'type_equipement_index', '_controller' => 'App\\Controller\\TypeEquipementController::indexTypeEquipement'], null, ['GET' => 0], null, true, false, null]],
        '/parametrage/typeEquipement/new' => [[['_route' => 'type_equipement_new', '_controller' => 'App\\Controller\\TypeEquipementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/parametrage/typeOuvrage' => [[['_route' => 'type_ouvrage_index', '_controller' => 'App\\Controller\\TypeOuvrageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/parametrage/typeOuvrage/new' => [[['_route' => 'type_ouvrage_new', '_controller' => 'App\\Controller\\TypeOuvrageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/parametrage/utilisateurs' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/parametrage/utilisateurs/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/pa(?'
                    .'|rametrage/(?'
                        .'|familleOuvrage/([^/]++)(?'
                            .'|(*:214)'
                            .'|/edit(*:227)'
                            .'|(*:235)'
                        .')'
                        .'|type(?'
                            .'|Equipement/([^/]++)(?'
                                .'|(*:273)'
                                .'|/edit(*:286)'
                                .'|(*:294)'
                            .')'
                            .'|Ouvrage/([^/]++)(?'
                                .'|(*:322)'
                                .'|/edit(*:335)'
                                .'|(*:343)'
                            .')'
                        .')'
                        .'|utilisateurs/([^/]++)(?'
                            .'|(*:377)'
                            .'|/edit(*:390)'
                            .'|(*:398)'
                        .')'
                    .')'
                    .'|ssage/([^/]++)(?'
                        .'|(*:425)'
                        .'|/edit(*:438)'
                        .'|(*:446)'
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
        214 => [[['_route' => 'famille_ouvrage_show', '_controller' => 'App\\Controller\\FamilleOuvrageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        227 => [[['_route' => 'famille_ouvrage_edit', '_controller' => 'App\\Controller\\FamilleOuvrageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        235 => [[['_route' => 'famille_ouvrage_delete', '_controller' => 'App\\Controller\\FamilleOuvrageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        273 => [[['_route' => 'type_equipement_show', '_controller' => 'App\\Controller\\TypeEquipementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        286 => [[['_route' => 'type_equipement_edit', '_controller' => 'App\\Controller\\TypeEquipementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        294 => [[['_route' => 'type_equipement_delete', '_controller' => 'App\\Controller\\TypeEquipementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        322 => [[['_route' => 'type_ouvrage_show', '_controller' => 'App\\Controller\\TypeOuvrageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'type_ouvrage_edit', '_controller' => 'App\\Controller\\TypeOuvrageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'type_ouvrage_delete', '_controller' => 'App\\Controller\\TypeOuvrageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        377 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        398 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        425 => [[['_route' => 'passage_a_gue_show', '_controller' => 'App\\Controller\\PassageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        438 => [[['_route' => 'passage_a_gue_edit', '_controller' => 'App\\Controller\\PassageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        446 => [
            [['_route' => 'passage_a_gue_delete', '_controller' => 'App\\Controller\\PassageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
