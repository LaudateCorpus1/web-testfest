<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $this->getText('BASE_TITLE'); ?></title>
<link rel="stylesheet" type="text/css" href="/public/css/style.css" media="screen" />
</head>
<body>

<?php echo $this->layout_content; ?>

<div id="left">
    <!-- News (RSS) -->
	<div class="box">
			<h2>News :</h2>	
			<p>News about the Test Fest</p>
	</div>
    <!-- Links to ... -->
	<div class="box">
				<h2>Links :</h2>
				<ul>
                 <li><a href="http://php.net">PHP</a></li>
                 <li><a href="http://qa.php.net">PHP QA</a></li>
                 <li><a href="http://wiki.php.net">PHP Wiki</a></li>
                 <li><a href="http://docs.php.net">PHP Docs</a></li>
                 <li><a href="http://bugs.php.net">PHP Bugs</a></li>
                 <li><a href="http://qa.php.net/testfest">PHP TestFest</a></li>
				</ul>
	</div>
    <!-- Original designer -->
    <div class="box">
	   <div style="font-size: 0.8em;">Design by <a href="http://www.minimalistic-design.net">Minimalistic Design</a></div>
	</div>
</div>
</div>
</body>
</html>
