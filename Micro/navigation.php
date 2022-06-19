<?php

/**@var $nav API\Core\Utils\NavBuilder\NavBuilder */
$user_avatar='';
$userID = 0;

$nav->link('MICRO1', 'siteRoot', 'fa-cannabis');
$nav->link('MICRO2', 'closure.parameter', 'fa-cogs',['param' => 'Doolittle']);

//$nav->drop('MICRO_PHP')
//    ->entry('MICRO_PHP_1', 'Micro.bootstrap','fa-cogs')
//    ->entry('MICRO_PHP_2', '','fa-star')
//    ->separator()
//    ->entry('MICRO_PHP_3', 'Micro.navigation','fa-cogs')
//    ->entry('MICRO_PHP_4', '','fa-cogs')
//    ->separator()
//    ->entry('MICRO_PHP_5', 'Check.rawValidation','fa-cogs')
//    ->entry('MICRO_PHP_6', 'taskService.index','fa-cogs');
//
//$nav->drop('DROPDOWN')
//    ->entry('DEMO1', 'closure.trial1','fa-cogs',['demo'=>'Controllers'])
//    ->entry('DEMO2', 'closure.trial2','fa-database',['demo'=>'Models'])
//    ->entry('DEMO3', 'closure.trial3','fa-desktop',['demo'=>'Views'])
//    ->entry('DEMO4', 'closure.trial4','fa-hospital',['demo'=>'Helpers']);
//
//$nav->link('MICRO2', 'Check.rawValidation', 'fa-star');
//$nav->link('MICRO3', 'taskService.index', 'fa-desktop');
//
$nav->drop('DROPDOWN2')
    ->entry('DEMO1', 'closure.parameter','fa-cogs',['param'=>'Controllers'])
    ->separator()
    ->entry('DEMO2', 'closure.parameter','fa-database',['param'=>'Models'])
    ->entry('DEMO3', 'closure.parameter','fa-desktop',['param'=>'Views'])
    ->entry('DEMO4', 'closure.parameter','fa-hospital',['param'=>'Routes']);


$nav->admin()
    ->entry('REGISTER', 'Micro.showWebPage', 'fa-user-plus', [],'GUEST')
    ->entry('LOG_IN', 'Micro.showWebPage', 'fa-sign-in-alt', [],"GUEST")
    ->avatar($user_avatar, 'authUserService.show', ['id'=>$userID],"USER")
    ->entry('LOG_OUT', 'authUserService.clearSession', 'fa-sign-out-alt', [],"USER");


