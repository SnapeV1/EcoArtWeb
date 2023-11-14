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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/conversation' => [[['_route' => 'app_conversation', '_controller' => 'App\\Controller\\ConversationController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_group', '_controller' => 'App\\Controller\\GroupController::index'], null, null, null, false, false, null]],
        '/admin/getGroups' => [[['_route' => 'Admingroups_getall', '_controller' => 'App\\Controller\\GroupController::getAllForAdmin'], null, null, null, false, false, null]],
        '/membre' => [[['_route' => 'app_membre', '_controller' => 'App\\Controller\\MembreController::index'], null, null, null, false, false, null]],
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
                .'|/conversations/([^/]++)/([^/]++)(*:201)'
                .'|/se(?'
                    .'|lect\\-receiver/([^/]++)(*:238)'
                    .'|ndmessage/([^/]++)/([^/]++)(*:273)'
                .')'
                .'|/messageDel/([^/]++)/([^/]++)/([^/]++)(*:320)'
                .'|/get(?'
                    .'|Groups/([^/]++)(*:350)'
                    .'|members/([^/]++)/([^/]++)(*:383)'
                .')'
                .'|/ad(?'
                    .'|d(?'
                        .'|Group/([^/]++)(*:416)'
                        .'|member/([^/]++)/([^/]++)(*:448)'
                    .')'
                    .'|min/(?'
                        .'|deletegroup/([^/]++)(*:484)'
                        .'|editgroup/([^/]++)(*:510)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|group/([^/]++)/([^/]++)(*:553)'
                    .'|_member/([^/]++)/([^/]++)(*:586)'
                .')'
                .'|/edit(?'
                    .'|group/([^/]++)/([^/]++)(*:626)'
                    .'|member/([^/]++)/([^/]++)/([^/]++)(*:667)'
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
        201 => [[['_route' => 'display_conversations', '_controller' => 'App\\Controller\\ConversationController::displayConversations'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        238 => [[['_route' => 'select_receiver', '_controller' => 'App\\Controller\\ConversationController::selectReceiver'], ['user1Id'], null, null, false, true, null]],
        273 => [[['_route' => 'send_message', '_controller' => 'App\\Controller\\ConversationController::sendMessage'], ['user1Id', 'user2Id'], null, null, false, true, null]],
        320 => [[['_route' => 'delete_message', '_controller' => 'App\\Controller\\ConversationController::delete_message'], ['id', 'user1Id', 'user2Id'], null, null, false, true, null]],
        350 => [[['_route' => 'groups_getall', '_controller' => 'App\\Controller\\GroupController::getAllForUser'], ['userid'], null, null, false, true, null]],
        383 => [[['_route' => 'members_getall', '_controller' => 'App\\Controller\\MembreController::getMembers'], ['id', 'userid'], null, null, false, true, null]],
        416 => [[['_route' => 'addgroup', '_controller' => 'App\\Controller\\GroupController::addGroup'], ['userid'], null, null, false, true, null]],
        448 => [[['_route' => 'addmember', '_controller' => 'App\\Controller\\MembreController::addMemberToGroup'], ['id', 'userId'], null, null, false, true, null]],
        484 => [[['_route' => 'admin_deletegroup', '_controller' => 'App\\Controller\\GroupController::Admin_deletegroup'], ['id'], null, null, false, true, null]],
        510 => [[['_route' => 'admin_updategroup', '_controller' => 'App\\Controller\\GroupController::AdminupdateGroup'], ['id'], null, null, false, true, null]],
        553 => [[['_route' => 'deletegroup', '_controller' => 'App\\Controller\\GroupController::deletegroup'], ['id', 'userid'], null, null, false, true, null]],
        586 => [[['_route' => 'delete_member', '_controller' => 'App\\Controller\\MembreController::deleteMember'], ['groupId', 'userId'], null, null, false, true, null]],
        626 => [[['_route' => 'update_group', '_controller' => 'App\\Controller\\GroupController::updateGroup'], ['id', 'userid'], null, null, false, true, null]],
        667 => [
            [['_route' => 'update_member', '_controller' => 'App\\Controller\\MembreController::updateGroup'], ['memberid', 'userid', 'groupid'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
