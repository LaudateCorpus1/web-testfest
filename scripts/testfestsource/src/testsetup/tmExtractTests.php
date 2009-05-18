<?php


class tmExtractTests {

    private $repositoryPath;
    private $svnTestLocation;
    private $relNamesToCopy;

    public function __construct($repositoryPath, $svnTestLocation) {
        $this->repositoryPath = $repositoryPath;
        $this->svnTestLocation = $svnTestLocation;
    }

    public function checkOut() {
        $current = realpath(getcwd());
        mkdir($this->svnTestLocation);
        chdir($this->svnTestLocation);
        shell_exec("svn checkout $this->repositoryPath");
        chdir($current);
         
    }

    public function update() {
        $current = realpath(getcwd());
        chdir($this->svnTestLocation."/testfest");
        shell_exec("svn update");
        chdir($current);
    }


    public function setFilesToCopy() {
        $this->relNamesToCopy = array();
        $current = realpath(getcwd());
        chdir($this->svnTestLocation."/testfest");
        $dirs = scandir($this->svnTestLocation."/testfest");

        $fileList = shell_exec("find . -name \"*.phpt\"");
        $phptFiles = explode('./', $fileList);

        $fileList = shell_exec("find . -name \"*.inc\"");
        $incFiles = explode('./', $fileList);

        $relNamesToCopy = array_merge($phptFiles, $incFiles);
      
        //remove any bogus entries
        foreach ($relNamesToCopy as $filename) {
            $filename = trim($filename);
            if (substr($filename, -strlen('.phpt')) == '.phpt') {
                $this->relNamesToCopy[] = $filename;
            }
            if (substr($filename, -strlen('.inc')) == '.inc') {
                $this->relNamesToCopy[] = $filename;
            }
        }

    }

    public function targetFileName($name) {
        if(preg_match('/(\w+)\/(.*).phpt/', $name, $matches)) {
            $target = $matches[2]."_".$matches[1].".phpt";
        } else if(preg_match('/(\w+)\/(.*).inc/', $name, $matches)) {
            $target = $matches[2].".inc";
        } else {
            $target = $name;
        }
        return $target;
    }

    public function getFilesToCopy()
    {
        return $this->relNamesToCopy;
    }







}
?>
