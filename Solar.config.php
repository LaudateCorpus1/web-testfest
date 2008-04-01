<?php

$config = array();

// Base action href
$config['Solar_Uri_Action']['path'] = "$URIBASE/index.php";

// Base public directory href
$config['Solar_Uri_Public']['path'] = "$URIBASE/public";

$config['Solar_Controller_Front']['classes'] = array(
    'PHP_App',
);
// Done!
return $config;
?>
