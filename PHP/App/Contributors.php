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
        
    }
}
