<?php
/**
 * Any actions done by a contributor is going to be 
 * done here.
 *
 * @todo Develop actionUpload
 * @todo Develop actionLogin
 * @todo Develop actionFiles
 */
class PHP_App_Contributors extends PHP_App_Base
{
    /**
     * Name of the partial to use for navigation
     *
     * @var string   The name of the partial.
     */
    public $nav_partial = '_contributors_nav';
    
    /**
     * Eventual upload error to be displayed
     *
     * @var string   The error.
     */
    public $upload_error = false;
    
    /**
     * Action index.
     *
     * This action index when the /contributors root is invoked.
     *
     * @return void
     */
    public function actionIndex()
    {

    }
    
    /**
     * Action upload.
     *
     * @return void
     */
    public function actionUpload()
    {
        if ($this->_request->isPost()) {
            try {
                $handler = new PHP_Lib_UploadHandler($this->_request->files('testfile'));
                $handler->process();
            } catch (Exception $e) {
                $this->upload_error = $e->getMessage();
                return;
            }
            $this->_session->setFlash('notice', 'UPLOAD_SUCCESS');
            $this->_redirectNoCache('contributors');
        }
    }
}
