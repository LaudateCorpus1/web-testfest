<?php
// $INCPATH is the the path to where Solar is installed,
// typically the PEAR PHP directory.

set_include_path(ini_get('include_path') . PATH_SEPARATOR . dirname(__FILE__));

// Load and start Solar.  Be sure to point to the proper
// location of your Solar.config.php file.
require_once 'Solar.php';
Solar::start(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Solar.config.php');

// Instantiate and run the front controller.
$front = Solar::factory('Solar_Controller_Front');
$front->display();

// Done!
Solar::stop();
?>
