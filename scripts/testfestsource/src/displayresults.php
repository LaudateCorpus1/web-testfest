<?php session_start()?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="PhpTestFestRegistration.css">

<head>
<title>PHPT results</title>
</head>

<h1> PHP TestFest 2009 run results</h1>

<body>
<p>This site is for checking tests that are contributed as part of PHP TestFest 2009. The tests are committed in a subversion repository, then extracted and run usung PHP5.2, PHP5.3 and PHP6.0. TestFest is focussed on PHP5.3, so the test should really work with PHP5.3. The PHP5.2 and PHP6.0 results are there to help people who will commit the tests in PHP's CVS to know how much work they have to do.

<p>The tests are being run on a 64bit Linux machine (which is currently having problems building PHP6), the results table should be updated hourly, at 20 minutes past the hour.
<p>The name of the user group responsible for writing the test is appended at that end of the test name. Thanks!

<?php

$phpVersion = array( 'php6.0',
                     'php5.3',
                     'php5.2',
);
$publishDir = 'publishresults';
$testRunDir = '/home/testfestreports/testRunDir';


foreach($phpVersion as $version) {
    $testfile=$publishDir."/".$version."/results";
//    echo "<br>$testfile<br>";
    $results = file($testfile);

    foreach($results as $line) {
        if(preg_match('/^TEST.*\s+([A-Z]{4})\s+.*\[(.*)\]/', $line, $matches)) {
            $base = substr($matches[2], 0, -5);         
	    $relativename = substr($base, strlen($testRunDir."/".$version."/"));         
            $publishname = $publishDir."/".$version."/".$relativename;
            $tests[] = $publishname;
            $relat[] = $relativename;
            $states[$relativename][$version] = $matches[1];
            $filebase[$relativename][$version] = $publishname;
           
        }
    }
    $relat = array_unique($relat);
}

$_SESSION['states'] = $states;
$_SESSION['filebase'] = $filebase;
$_SESSION['relat'] = $relat;

$out = buildSummaryTable($states,  $relat, $filebase);
echo $out;

function buildSummaryTable($states, $relat, $filebase) {
   
    $htmlString = "<table class=\"resultTable\">";
    $htmlString .= "<th>TestName</th><th>PHP52</th><th>PHP53</th><th>PHP6</th>";
    
    foreach($relat as $testname) {
        $s52 = $states[$testname]['php5.2'];
        if($s52 == 'FAIL') {
            $basename = $filebase[$testname]['php5.2'];
            $ref = 'failedfilelist.php?basename='.$basename;
            $s52 = "<a href=$ref>X</a><br>";
        }
        $s53 = $states[$testname]['php5.3'];
        if($s53 == 'FAIL') {
            $basename = $filebase[$testname]['php5.3'];
            $ref = 'failedfilelist.php?basename='.$basename;
            $s53 = "<a href=$ref>X</a><br>";
        }
        $s60 = $states[$testname]['php6.0'];
        if($s60 == 'FAIL') {
            $basename = $filebase[$testname]['php6.0'];
            $ref = 'failedfilelist.php?basename='.$basename;
            $s60 = "<a href=$ref>X</a><br>";
        }


        $htmlString .= "<tr><td>$testname</td><td>$s52</td><td>$s53</td><td>$s60</td></tr>";
    }
    $htmlString .= "</table>";
    return $htmlString;
}

?>

</body>
</html>
