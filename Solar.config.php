<?php

$config = array();

$safedir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'jail';
// Base action href
$config['Solar_Uri_Action']['path'] = "$URIBASE/index.php";

// Base public directory href
$config['Solar_Uri_Public']['path'] = "$URIBASE/public";

$config['Solar_Sql_Adapter_Sqlite'] = array(
    'name' => "$safedir/testfest"
);

$config['Solar_Auth']['adapter'] = 'Solar_Auth_Adapter_Sql';
$config['Solar_Auth_Adapter_Sql']['table'] = 'auth';

$config['Solar_Auth_Adapter_Sql']['handle_col'] = 'handle';
$config['Solar_Auth_Adapter_Sql']['passwd_col'] = 'password';
$config['Solar_Auth_Adapter_Sql']['salt']       = 'testtt';

$config['Solar_Controller_Front']['classes'] = array(
    'PHP_App',
);

// Done!
return $config;
?>
