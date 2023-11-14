<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_conversation' => [[], ['_controller' => 'App\\Controller\\ConversationController::index'], [], [['text', '/conversation']], [], [], []],
    'display_conversations' => [['user1Id', 'user2Id'], ['_controller' => 'App\\Controller\\ConversationController::displayConversations'], [], [['variable', '/', '[^/]++', 'user2Id', true], ['variable', '/', '[^/]++', 'user1Id', true], ['text', '/conversations']], [], [], []],
    'select_receiver' => [['user1Id'], ['_controller' => 'App\\Controller\\ConversationController::selectReceiver'], [], [['variable', '/', '[^/]++', 'user1Id', true], ['text', '/select-receiver']], [], [], []],
    'send_message' => [['user1Id', 'user2Id'], ['_controller' => 'App\\Controller\\ConversationController::sendMessage'], [], [['variable', '/', '[^/]++', 'user2Id', true], ['variable', '/', '[^/]++', 'user1Id', true], ['text', '/sendmessage']], [], [], []],
    'delete_message' => [['id', 'user1Id', 'user2Id'], ['_controller' => 'App\\Controller\\ConversationController::delete_message'], [], [['variable', '/', '[^/]++', 'user2Id', true], ['variable', '/', '[^/]++', 'user1Id', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/messageDel']], [], [], []],
    'app_group' => [[], ['_controller' => 'App\\Controller\\GroupController::index'], [], [['text', '/index']], [], [], []],
    'groups_getall' => [['userid'], ['_controller' => 'App\\Controller\\GroupController::getAllForUser'], [], [['variable', '/', '[^/]++', 'userid', true], ['text', '/getGroups']], [], [], []],
    'addgroup' => [['userid'], ['_controller' => 'App\\Controller\\GroupController::addGroup'], [], [['variable', '/', '[^/]++', 'userid', true], ['text', '/addGroup']], [], [], []],
    'deletegroup' => [['id', 'userid'], ['_controller' => 'App\\Controller\\GroupController::deletegroup'], [], [['variable', '/', '[^/]++', 'userid', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/deletegroup']], [], [], []],
    'update_group' => [['id', 'userid'], ['_controller' => 'App\\Controller\\GroupController::updateGroup'], [], [['variable', '/', '[^/]++', 'userid', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/editgroup']], [], [], []],
    'Admingroups_getall' => [[], ['_controller' => 'App\\Controller\\GroupController::getAllForAdmin'], [], [['text', '/admin/getGroups']], [], [], []],
    'admin_deletegroup' => [['id'], ['_controller' => 'App\\Controller\\GroupController::Admin_deletegroup'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/deletegroup']], [], [], []],
    'admin_updategroup' => [['id'], ['_controller' => 'App\\Controller\\GroupController::AdminupdateGroup'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/editgroup']], [], [], []],
    'members_getall' => [['id', 'userid'], ['_controller' => 'App\\Controller\\MembreController::getMembers'], [], [['variable', '/', '[^/]++', 'userid', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/getmembers']], [], [], []],
    'app_membre' => [[], ['_controller' => 'App\\Controller\\MembreController::index'], [], [['text', '/membre']], [], [], []],
    'addmember' => [['id', 'userId'], ['_controller' => 'App\\Controller\\MembreController::addMemberToGroup'], [], [['variable', '/', '[^/]++', 'userId', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/addmember']], [], [], []],
    'delete_member' => [['groupId', 'userId'], ['_controller' => 'App\\Controller\\MembreController::deleteMember'], [], [['variable', '/', '[^/]++', 'userId', true], ['variable', '/', '[^/]++', 'groupId', true], ['text', '/delete_member']], [], [], []],
    'update_member' => [['memberid', 'userid', 'groupid'], ['_controller' => 'App\\Controller\\MembreController::updateGroup'], [], [['variable', '/', '[^/]++', 'groupid', true], ['variable', '/', '[^/]++', 'userid', true], ['variable', '/', '[^/]++', 'memberid', true], ['text', '/editmember']], [], [], []],
];
