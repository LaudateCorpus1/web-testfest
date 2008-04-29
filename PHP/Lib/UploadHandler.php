<?php

class PHP_Lib_UploadHandler
{
    private $upload;
    
    public function __construct($upload)
    {
        if ($upload['error'] !== 0) {
            throw new Exception('UPLOAD_FORM_ERROR');
        }
        
        $this->upload = $upload;
    }
    
    public function process()
    {
        $path_parts = pathinfo($this->upload['name']);
        
        switch ($path_parts['extension'])
        {
            case 'zip':
                $this->handle_zip($this->upload);
                break;
            case 'phpt':
                $this->db_insert($this->upload['name'], fopen($this->upload['tmp_name'], 'r'));
                break;
            default:
                throw new Exception('UPLOAD_UNKNOWN_FILE_TYPE');
        }
    }
    
    private function handle_zip($upload)
    {
        $zip = new ZipArchive;
        if (!$zip->open($upload['tmp_name'])) {
            throw new Exception('UPLOAD_UNZIP_ERROR');
        } else {
            for ($i=0; $i<$zip->numFiles;$i++) {
                $filename = $zip->getNameIndex($i);
                $handle = $zip->getStream($filename);
                $this->db_insert($filename, $handle);
            }
            $zip->close();
        }
    }
    
    private function db_insert($test_file_name, $test_file_handle)
    {
        $contents = '';
        $description = '';
        while (!feof($test_file_handle)) {
            $buffer = fgets($test_file_handle, 4096);
            $contents.= $buffer;
            if (trim($buffer) == '--TEST--') {
                $description = fgets($test_file_handle, 4096);
                $contents.= $buffer;
            }
        }
        $model = new PHP_Model_Tests();
        $model->insert(array(
            'filename' => $test_file_name,
            'description' => $description,
            'status' => 'Uploaded'
        ));
    }
}

?>
