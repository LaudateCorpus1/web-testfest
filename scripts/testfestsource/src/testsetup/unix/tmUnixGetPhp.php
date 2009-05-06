<?php
class tmUnixGetPhp extends tmGetPhp
{

    public function setBuildName()
    {
        $snapsindex=file_get_contents($this->snapsSite);
        preg_match("/($this->buildType-\d{12}).tar.gz/", $snapsindex, $matches);
        $this->buildName = ($matches[1]);
    }

    public function setBuildFileName()
    {
        $this->buildFileName = $this->buildName.".tar.gz";
    }

    public function setBuildDate()
    {
        $this->buildDate = substr($this->buildName, -12);
    }


    public function getLatestBuildFile($buildsDir)
    {
        $current = realpath(getcwd());
        chdir($buildsDir);
        shell_exec("wget ".$this->snapsSite."/".$this->buildFileName);
        chdir($current);
    }


    public function extractSource($buildsDir)
    {
        $current = realpath(getcwd());
        chdir($buildsDir);
        if(is_dir($this->buildType)) {
            shell_exec("rm -r ".$this->buildType);
        }
        shell_exec("tar -xvzf ".$this->buildFileName);
        shell_exec("mv ".$this->buildName." ".$this->buildType);
        
        file_put_contents('buildDates'.$this->buildType, $this->buildDate);
        
        chdir($current);
    }

    public function buildPHP ($buildsDir)
    {
       $configure_flags = "";
       if(substr($this->buildType, -strlen('6.0')) == '6.0') {
            $configure_flags .= "--with-icu-dir=/home/testfestreports/phpBuildDir/ICU-install";
       }
       $current = realpath(getcwd());
       chdir($buildsDir."/".$this->buildType);
        shell_exec("./buildconf");
        shell_exec("./configure $configure_flags");
        shell_exec("make");
        chdir($current);
    }


}
?>
