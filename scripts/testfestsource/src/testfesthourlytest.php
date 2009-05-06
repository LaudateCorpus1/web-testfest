<?php

/*
 * Main php file for testManager
 *
 */

require_once dirname(__FILE__) . '/tmAutoload.php';

$repositoryPath = "http://89.151.87.83/repos/testfest";

//Setup

$rootDir = "/home/testfestreports";

$svnCheckOutDir = $rootDir."/svnCheckOutDir";

$phpBuildDir = $rootDir."/phpBuildDir";

$testRunDir = $rootDir."/testRunDir";

$phpVersion = array( 'php6.0',
                     'php5.3',
                     'php5.2',
);

//Script sould run once an hour. Relies on having PHP builds in the right place

$testSetup = new tmExtractTests($repositoryPath, $svnCheckOutDir);

if(!is_dir($svnCheckOutDir)) {
    $testSetup->checkOut();
} else {
    echo "updating\n";
    $testSetup->update();
}

$testSetup->setFilesToCopy();

$filesToCopy = $testSetup->getFilesToCopy();

//copy all the files into a directory thay can be run from
foreach($phpVersion as $dir) {
    foreach ($filesToCopy as $file) {         
        $from = trim($svnCheckOutDir."/testfest/".$file);
        $destFile = $testSetup->targetFileName($file);
        $to = $testRunDir."/".$dir."/".$destFile;
        echo "Copy $from to $to\n";
        shell_exec("cp $from $to");         
    }
}

foreach ($phpVersion as $dir) {
    $run_tests = $phpBuildDir."/".$dir."/run-tests.php";
    $phpExecutable = $phpBuildDir."/".$dir."/sapi/cli/php";
    $testDir = $testRunDir."/".$dir;
    echo "$phpExecutable -n  $run_tests -n -p $phpExecutable $testDir\n";
    $results = shell_exec("$phpExecutable -n  $run_tests -n -p $phpExecutable $testDir");
    var_dump ($results);
    file_put_contents($testDir."/results", $results);
}






?>
