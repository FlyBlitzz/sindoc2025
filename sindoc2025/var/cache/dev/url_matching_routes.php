<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_usersindex', '_controller' => 'App\\Controller\\Admin\\UsersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ckeditor5/test' => [[['_route' => 'app_ckeditor5_test', '_controller' => 'App\\Controller\\Ckeditor5TestController::index'], null, null, null, false, false, null]],
        '/mot_cle/new' => [[['_route' => 'motCle_app_mot_cle_new', '_controller' => 'App\\Controller\\DeleteMotController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ErrorController::show'], null, null, null, false, false, null]],
        '/fiche/ajout' => [[['_route' => 'add_fiche', '_controller' => 'App\\Controller\\FicheController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fiche/ajout/deuxieme' => [[['_route' => 'deuxieme_formulaire_route', '_controller' => 'App\\Controller\\FicheController::deuxiemeFormulaireAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fiche/recherche' => [[['_route' => 'fiche_recherche', '_controller' => 'App\\Controller\\FicheController::recherche'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fiche/recherche/deuxieme' => [[['_route' => 'deuxieme_fiche_recherche', '_controller' => 'App\\Controller\\FicheController::rechercheDeuxiemeFormulaireAction'], null, null, null, false, false, null]],
        '/fiches/pdf' => [[['_route' => 'fiches_pdf', '_controller' => 'App\\Controller\\FicheController::exportPdf'], null, null, null, false, false, null]],
        '/fiches/word' => [[['_route' => 'fiches_word', '_controller' => 'App\\Controller\\FicheController::exportToDownload'], null, null, null, false, false, null]],
        '/sav/requete/new' => [[['_route' => 'savreq_app_sav_requete_new', '_controller' => 'App\\Controller\\FicheController::newRequete'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fiche/list' => [[['_route' => 'fiche_list', '_controller' => 'App\\Controller\\FicheController::list'], null, null, null, false, false, null]],
        '/fiche/list/double' => [[['_route' => 'fiche_list_double', '_controller' => 'App\\Controller\\FicheController::listDouble'], null, null, null, false, false, null]],
        '/fiche/list/non_visible' => [[['_route' => 'fiche_list_cachee', '_controller' => 'App\\Controller\\FicheController::listCachee'], null, null, null, false, false, null]],
        '/historique' => [[['_route' => 'historique_app_historique_index', '_controller' => 'App\\Controller\\HistoriqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/historique/search' => [[['_route' => 'historique_search', '_controller' => 'App\\Controller\\HistoriqueController::searchHistorique'], null, ['GET' => 0], null, false, false, null]],
        '/historique/clear' => [[['_route' => 'vider_historique', '_controller' => 'App\\Controller\\HistoriqueController::viderHistorique'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/indexes/authorized' => [[['_route' => 'app_index_authorized_user', '_controller' => 'App\\Controller\\IndexController::viewAuthorizedIndexesForUser'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'index_app_index_index', '_controller' => 'App\\Controller\\IndexController::index'], null, ['GET' => 0], null, false, false, null]],
        '/index/new' => [[['_route' => 'index_app_index_new', '_controller' => 'App\\Controller\\IndexController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livre/livres/authorized/user-livres' => [[['_route' => 'app_livre_app_livre_authorized_livres', '_controller' => 'App\\Controller\\LivreController::getAuthorizedLivres'], null, ['GET' => 0], null, false, false, null]],
        '/livre' => [[['_route' => 'app_livre_app_livre_index', '_controller' => 'App\\Controller\\LivreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/livre/new' => [[['_route' => 'app_livre_app_livre_new', '_controller' => 'App\\Controller\\LivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livre/dropdown/get-livre' => [[['_route' => 'app_livre_app_livre_get_livre_dropdown', '_controller' => 'App\\Controller\\LivreController::getLivresDropdown'], null, ['GET' => 0], null, false, false, null]],
        '/livre/session/set-livre' => [[['_route' => 'app_livre_app_livre_set_livre_session', '_controller' => 'App\\Controller\\LivreController::setLivreSession'], null, ['POST' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'mentions_legales', '_controller' => 'App\\Controller\\MainController::indexMentions'], null, null, null, false, false, null]],
        '/annuaire' => [[['_route' => 'app_annuaire', '_controller' => 'App\\Controller\\MainController::indexAnnuaire'], null, null, null, false, false, null]],
        '/mot/cle' => [[['_route' => 'mot_cle_app_mot_cle_index', '_controller' => 'App\\Controller\\MotCleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/mot/cle/new' => [[['_route' => 'mot_cle_app_mot_cle_new', '_controller' => 'App\\Controller\\MotCleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/sav/requete' => [[['_route' => 'savreq_app_sav_requete_index', '_controller' => 'App\\Controller\\SavRequeteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sav/req/results' => [[['_route' => 'savreq_app_recherche_results', '_controller' => 'App\\Controller\\SavRequeteController::rechercheResult'], null, null, null, false, false, null]],
        '/sav/req' => [[['_route' => 'savreq_app_recherche', '_controller' => 'App\\Controller\\SavRequeteController::recherche'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/password-changed' => [[['_route' => 'password_changed', '_controller' => 'App\\Controller\\SecurityController::passwordChanged'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/statut' => [[['_route' => 'statut_app_statut_index', '_controller' => 'App\\Controller\\StatutController::index'], null, ['GET' => 0], null, true, false, null]],
        '/statut/new' => [[['_route' => 'statut_app_statut_new', '_controller' => 'App\\Controller\\StatutController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test-ckeditor' => [[['_route' => 'test_ckeditor', '_controller' => 'App\\Controller\\TestCkeditorController::testFinal'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_admin_app_users_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/valider/inscription' => [[['_route' => 'app_admin_app_users_validerInsc', '_controller' => 'App\\Controller\\UserController::validerInscription'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_admin_app_users_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/visiteur' => [[['_route' => 'visiteur_multi_requetes', '_controller' => 'App\\Controller\\UserController::visiteurs'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fiche/autorise' => [[['_route' => 'autorisation_livre', '_controller' => 'App\\Controller\\UserController::newAutorisation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/get_base_html' => [[['_route' => 'get_base_html', '_controller' => 'App\\Controller\\UserController::getBaseHTML'], null, null, null, false, false, null]],
        '/admin_get_base_html' => [[['_route' => 'admin_get_base_html', '_controller' => 'App\\Controller\\MainController::getBaseHTMLAdmin'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/mot(?'
                    .'|_cle/([^/]++)(?'
                        .'|(*:225)'
                        .'|/editMot(*:241)'
                        .'|(*:249)'
                    .')'
                    .'|s\\-cles/([^/]++)(*:274)'
                    .'|/cle/([^/]++)(?'
                        .'|(*:298)'
                        .'|/edit(?'
                            .'|(*:314)'
                            .'|Mot(*:325)'
                        .')'
                        .'|(*:334)'
                    .')'
                .')'
                .'|/fiche(?'
                    .'|\\-mot\\-cle/delete/([^/]++)/([^/]++)(*:388)'
                    .'|/(?'
                        .'|dupliquer/([^/]++)(*:418)'
                        .'|([^/]++)/recherche/resultats(*:454)'
                        .'|export/([^/]++)(*:477)'
                        .'|user/list/([^/]++)(*:503)'
                        .'|supprimer/([^/]++)(*:529)'
                        .'|total/(?'
                            .'|savReq/(\\d+)(*:558)'
                            .'|rech/(\\d+)(*:576)'
                            .'|(\\d+)(*:589)'
                        .')'
                        .'|(\\d+)(*:603)'
                        .'|total/(?'
                            .'|rech/([^/]++)/edit(*:638)'
                            .'|savReq/([^/]++)/edit(*:666)'
                        .')'
                        .'|re(?'
                            .'|ch(?'
                                .'|erche\\-multi/([^/]++)/edit(*:711)'
                                .'|/([^/]++)/edit(*:733)'
                            .')'
                            .'|quete/([^/]++)/([^/]++)/edit(*:770)'
                        .')'
                        .'|([^/]++)/edit(*:792)'
                        .'|total/([^/]++)/edit(*:819)'
                        .'|([^/]++)/(?'
                            .'|duplicate(*:848)'
                            .'|hide(*:860)'
                        .')'
                    .')'
                .')'
                .'|/historique/(?'
                    .'|([^/]++)/edit(*:899)'
                    .'|delete/([^/]++)(*:922)'
                .')'
                .'|/index(?'
                    .'|/(?'
                        .'|([^/]++)/livres(*:959)'
                        .'|toggle/([^/]++)(*:982)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|invisible(*:1014)'
                                .'|auth(?'
                                    .'|(*:1030)'
                                    .'|/(?'
                                        .'|save(*:1047)'
                                        .'|remove/([^/]++)(*:1071)'
                                    .')'
                                .')'
                                .'|edit(*:1086)'
                            .')'
                            .'|(*:1096)'
                        .')'
                    .')'
                    .'|es/authorized/([^/]++)(*:1129)'
                .')'
                .'|/export/(?'
                    .'|pdf/([^/]++)(*:1162)'
                    .'|word/([^/]++)(*:1184)'
                .')'
                .'|/livre/(?'
                    .'|livre(?'
                        .'|/(?'
                            .'|toggle/([^/]++)(*:1231)'
                            .'|([^/]++)/auth(?'
                                .'|(*:1256)'
                                .'|/(?'
                                    .'|save(*:1273)'
                                    .'|remove/([^/]++)(*:1297)'
                                .')'
                            .')'
                        .')'
                        .'|s/authorized/([^/]++)(*:1330)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:1351)'
                        .'|/edit(*:1365)'
                        .'|(*:1374)'
                    .')'
                    .'|livre/([^/]++)/edit(*:1403)'
                .')'
                .'|/user(?'
                    .'|s(?'
                        .'|/([^/]++)(?'
                            .'|(*:1437)'
                            .'|/edit(*:1451)'
                        .')'
                        .'|s/([^/]++)(*:1471)'
                    .')'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|(*:1496)'
                            .'|/edit(?'
                                .'|(*:1513)'
                                .'|User(*:1526)'
                            .')'
                            .'|(*:1536)'
                        .')'
                        .'|de(?'
                            .'|sactiver/([^/]++)(*:1568)'
                            .'|activer/([^/]++)(*:1593)'
                        .')'
                        .'|supprimer/([^/]++)(*:1621)'
                        .'|autoriser/([^/]++)(*:1648)'
                        .'|([^/]++)/validate(*:1674)'
                    .')'
                .')'
                .'|/s(?'
                    .'|av/requete/([^/]++)(?'
                        .'|/(?'
                            .'|show(*:1720)'
                            .'|edit(*:1733)'
                        .')'
                        .'|(*:1743)'
                    .')'
                    .'|tatut/([^/]++)(?'
                        .'|(*:1770)'
                        .'|/edit(*:1784)'
                        .'|(*:1793)'
                    .')'
                .')'
                .'|/desactiver/([^/]++)(*:1824)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        225 => [[['_route' => 'motCle_app_mot_cle_show', '_controller' => 'App\\Controller\\DeleteMotController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'motCle_app_mot_cle_edit_un_mot', '_controller' => 'App\\Controller\\DeleteMotController::editUnMot'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        249 => [[['_route' => 'motCle_app_mot_cle_delete', '_controller' => 'App\\Controller\\DeleteMotController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_mots_cles', '_controller' => 'App\\Controller\\IndexController::motsCles'], ['indexId'], ['GET' => 0], null, false, true, null]],
        298 => [[['_route' => 'mot_cle_app_mot_cle_show', '_controller' => 'App\\Controller\\MotCleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'mot_cle_app_mot_cle_edit', '_controller' => 'App\\Controller\\MotCleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        325 => [[['_route' => 'mot_cle_app_mot_cle_edit_un_mot', '_controller' => 'App\\Controller\\MotCleController::editUnMot'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        334 => [[['_route' => 'mot_cle_app_mot_cle_delete', '_controller' => 'App\\Controller\\MotCleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        388 => [[['_route' => 'fiche_mot_cle_delete', '_controller' => 'App\\Controller\\FicheController::deleteFicheMotCle'], ['motCle', 'fiche'], null, null, false, true, null]],
        418 => [[['_route' => 'fiche_dupliquer', '_controller' => 'App\\Controller\\FicheController::dupliquer'], ['ficheID'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        454 => [[['_route' => 'fiche_recherche_resultat', '_controller' => 'App\\Controller\\FicheController::resultatRecherche'], ['livreId'], null, null, false, false, null]],
        477 => [[['_route' => 'fiche_export', '_controller' => 'App\\Controller\\FicheController::exportFiche'], ['id'], null, null, false, true, null]],
        503 => [[['_route' => 'user_auth_fiche_list', '_controller' => 'App\\Controller\\FicheController::listUserAuithFiche'], ['userId'], null, null, false, true, null]],
        529 => [[['_route' => 'delete_fiche', '_controller' => 'App\\Controller\\FicheController::deleteFiche'], ['id'], null, null, false, true, null]],
        558 => [[['_route' => 'detail_fiche_total_sav_req', '_controller' => 'App\\Controller\\FicheController::detailFicheTotalSavReq'], ['id'], null, null, false, true, null]],
        576 => [[['_route' => 'detail_fiche_total_rech', '_controller' => 'App\\Controller\\FicheController::detailFicheTotalRech'], ['id'], null, null, false, true, null]],
        589 => [[['_route' => 'detail_fiche_total', '_controller' => 'App\\Controller\\FicheController::detailFicheTotal'], ['id'], null, null, false, true, null]],
        603 => [[['_route' => 'detail_fiche', '_controller' => 'App\\Controller\\FicheController::detailFiche'], ['id'], null, null, false, true, null]],
        638 => [[['_route' => 'app_fiche_edit_total_rech', '_controller' => 'App\\Controller\\FicheController::editTotalRech'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        666 => [[['_route' => 'app_fiche_edit_total_sav_req', '_controller' => 'App\\Controller\\FicheController::editTotalSavReq'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        711 => [[['_route' => 'app_fiche_rech_savReqCombin_edit', '_controller' => 'App\\Controller\\FicheController::editFicheRechSavReqCombin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        733 => [[['_route' => 'app_fiche_rech_edit', '_controller' => 'App\\Controller\\FicheController::editFicheRech'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        770 => [[['_route' => 'app_fiche_requete_edit', '_controller' => 'App\\Controller\\FicheController::editFicheRechSavReq'], ['id', 'reqId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        792 => [[['_route' => 'app_fiche_edit', '_controller' => 'App\\Controller\\FicheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        819 => [[['_route' => 'app_fiche_edit_total', '_controller' => 'App\\Controller\\FicheController::editFicheTotal'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        848 => [[['_route' => 'app_fiche_duplicate', '_controller' => 'App\\Controller\\FicheController::duplicate'], ['id'], ['GET' => 0], null, false, false, null]],
        860 => [[['_route' => 'app_fiche_hide', '_controller' => 'App\\Controller\\FicheController::hide'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        899 => [[['_route' => 'historique_app_historique_edit', '_controller' => 'App\\Controller\\HistoriqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        922 => [[['_route' => 'historique_app_historique_delete', '_controller' => 'App\\Controller\\HistoriqueController::delete'], ['id'], null, null, false, true, null]],
        959 => [[['_route' => 'app_index_livres', '_controller' => 'App\\Controller\\IndexController::getAssociatedLivres'], ['id'], ['GET' => 0], null, false, false, null]],
        982 => [[['_route' => 'app_index_toggle_visibility', '_controller' => 'App\\Controller\\IndexController::toggleVisibility'], ['id'], ['POST' => 0], null, false, true, null]],
        1014 => [[['_route' => 'app_index_invisible', '_controller' => 'App\\Controller\\IndexController::makeIndexInvisible'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        1030 => [[['_route' => 'app_index_auth', '_controller' => 'App\\Controller\\IndexController::authPage'], ['id'], ['GET' => 0], null, false, false, null]],
        1047 => [[['_route' => 'app_index_auth_save', '_controller' => 'App\\Controller\\IndexController::saveAuth'], ['id'], ['POST' => 0], null, false, false, null]],
        1071 => [[['_route' => 'app_index_auth_remove', '_controller' => 'App\\Controller\\IndexController::removeAuth'], ['id', 'userId'], ['GET' => 0], null, false, true, null]],
        1086 => [[['_route' => 'index_app_index_edit', '_controller' => 'App\\Controller\\IndexController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1096 => [
            [['_route' => 'index_app_index_show', '_controller' => 'App\\Controller\\IndexController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'index_app_index_delete', '_controller' => 'App\\Controller\\IndexController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1129 => [[['_route' => 'app_index_authorized', '_controller' => 'App\\Controller\\IndexController::viewAuthorizedIndexes'], ['id'], null, null, false, true, null]],
        1162 => [[['_route' => 'export_pdf', '_controller' => 'App\\Controller\\IndexController::exportPdf'], ['indexId'], null, null, false, true, null]],
        1184 => [[['_route' => 'export_word', '_controller' => 'App\\Controller\\IndexController::exportWord'], ['indexId'], null, null, false, true, null]],
        1231 => [[['_route' => 'app_livre_toggle_visibility', '_controller' => 'App\\Controller\\LivreController::toggleVisibility'], ['id'], ['POST' => 0], null, false, true, null]],
        1256 => [[['_route' => 'app_livre_app_livre_auth', '_controller' => 'App\\Controller\\LivreController::authPage'], ['id'], ['GET' => 0], null, false, false, null]],
        1273 => [[['_route' => 'app_livre_app_livre_auth_save', '_controller' => 'App\\Controller\\LivreController::saveAuth'], ['id'], ['POST' => 0], null, false, false, null]],
        1297 => [[['_route' => 'app_livre_app_livre_auth_remove', '_controller' => 'App\\Controller\\LivreController::removeAuth'], ['id', 'userId'], ['GET' => 0], null, false, true, null]],
        1330 => [[['_route' => 'app_livre_app_livre_authorized', '_controller' => 'App\\Controller\\LivreController::viewAuthorizedLivres'], ['id'], null, null, false, true, null]],
        1351 => [[['_route' => 'app_livre_app_livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1365 => [[['_route' => 'app_livre_app_livre_edit', '_controller' => 'App\\Controller\\LivreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1374 => [[['_route' => 'app_livre_app_livre_delete', '_controller' => 'App\\Controller\\LivreController::invisible'], ['id'], ['POST' => 0], null, false, true, null]],
        1403 => [[['_route' => 'app_livre_livre_app_livre_edit', '_controller' => 'App\\Controller\\LivreController::editAuth'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1437 => [[['_route' => 'app_user_app_user_show', '_controller' => 'App\\Controller\\ProfileUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1451 => [[['_route' => 'app_user_app_user_edit', '_controller' => 'App\\Controller\\ProfileUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1471 => [[['_route' => 'app_admin_app_users_show_admin', '_controller' => 'App\\Controller\\UserController::showUsers'], ['id'], ['GET' => 0], null, false, true, null]],
        1496 => [[['_route' => 'app_admin_app_users_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1513 => [[['_route' => 'app_admin_app_users_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1526 => [[['_route' => 'app_admin_app_users_edit_user_password', '_controller' => 'App\\Controller\\UserController::editUserPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1536 => [[['_route' => 'app_admin_app_users_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1568 => [[['_route' => 'desactiver_user', '_controller' => 'App\\Controller\\UserController::desactiverUser'], ['id'], null, null, false, true, null]],
        1593 => [[['_route' => 'desactive_user', '_controller' => 'App\\Controller\\UserController::disactiveUser'], ['id'], null, null, false, true, null]],
        1621 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
        1648 => [[['_route' => 'autoriser_user', '_controller' => 'App\\Controller\\UserController::autoriserUser'], ['id'], null, null, false, true, null]],
        1674 => [[['_route' => 'admin_user_validate', '_controller' => 'App\\Controller\\UserController::validateUser'], ['id'], null, null, false, false, null]],
        1720 => [[['_route' => 'savreq_app_sav_requete_show', '_controller' => 'App\\Controller\\SavRequeteController::showRequete'], ['id'], ['GET' => 0], null, false, false, null]],
        1733 => [[['_route' => 'savreq_app_sav_requete_edit', '_controller' => 'App\\Controller\\SavRequeteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1743 => [[['_route' => 'savreq_app_sav_requete_delete', '_controller' => 'App\\Controller\\SavRequeteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1770 => [[['_route' => 'statut_app_statut_show', '_controller' => 'App\\Controller\\StatutController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1784 => [[['_route' => 'statut_app_statut_edit', '_controller' => 'App\\Controller\\StatutController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1793 => [[['_route' => 'statut_app_statut_delete', '_controller' => 'App\\Controller\\StatutController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1824 => [
            [['_route' => 'desactiver_simple_user', '_controller' => 'App\\Controller\\UserController::desactiverSimpleUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
