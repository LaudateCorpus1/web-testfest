<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $this->getText('BASE_TITLE'); ?></title>
<link rel="stylesheet" type="text/css" href="/public/css/style.css" media="screen" />
<script src="/public/js/jquery-1.2.3.min.js" type="text/javascript"></script>
<script type="text/javascript">                                         
    $(document).ready(function() {
        $('#notice').show('slow');
        window.setTimeout("$('#notice').hide('slow')", 4000);
    });                                    
</script>
</head>
<body>
<div id="container">
    
    <div id="header">
        <h1 class="header-logo">PHP Testfest 2008</h1>
        <!-- Links to ... -->
    	<ul id="header-links">
            <li><a href="http://php.net">PHP</a></li>
            <li><a href="http://qa.php.net">PHP QA</a></li>
            <li><a href="http://wiki.php.net">PHP Wiki</a></li>
            <li><a href="http://docs.php.net">PHP Docs</a></li>
            <li><a href="http://bugs.php.net">PHP Bugs</a></li>
    	</ul>
    	<?php if ($this->nav_partial) echo $this->partial($this->nav_partial); ?>
    	<div id="notice" style="display:hidden;">
            <?php if ($this->flash_notice !== null) : ?>
                <p><?php echo $this->getText($this->flash_notice); ?></p>
            <?php endif; ?>
        </div>
    </div>
    
    <div id="wrapper">
        <div id="content">
            <?php echo $this->layout_content; ?>
        </div>
    </div>
    
    <div id="sidebar">
        <!-- News (RSS) -->
    	<div class="box">
    	    <h2>News :</h2>	
            <p>News about the Test Fest</p>
    	</div>
    </div>
    
    <div id="footer">
        <a href="http://php.net/copyright.php">Copyright &copy; 2001-2008 The PHP Group</a><br />
        All rights reserved.
    </div>
    
</div>
</body>
</html>
