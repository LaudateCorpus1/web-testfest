<?php

$URIBASE = '/';
$config = array();

$safedir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'jail';
// Base action href
$config['Solar_Uri_Action']['path'] = "$URIBASE";

// Base public directory href
$config['Solar_Uri_Public']['path'] = "$URIBASE/public";

// DB config
$config['Solar_Sql'] = array(
    'adapter' => 'Solar_Sql_Adapter_Mysql',
    'host'    => '127.0.0.1',
    'user'    => 'testfest',
    'pass'    => 'php',
    'name'    => 'testfest',
);

// Auth config
$config['Solar_Auth']['adapter'] = 'Solar_Auth_Adapter_Sql';
$config['Solar_Auth_Adapter_Sql']['table'] = 'contributors';
$config['Solar_Auth_Adapter_Sql']['uid_col']    = 'id';
$config['Solar_Auth_Adapter_Sql']['handle_col'] = 'username';
$config['Solar_Auth_Adapter_Sql']['passwd_col'] = 'password';
$config['Solar_Auth_Adapter_Sql']['salt']       = 'testtt';

// Front controller config
$config['Solar_Controller_Front']['classes'] = array('PHP_App');
$config['Solar_Controller_Front']['default'] = 'index';

// Done!
return $config;
?>
