<?php
Solar::autoload('Solar_Controller_Page');

/**
 * That really is just a base so we
 * can have the same templates shared
 * accross modules
 */
class PHP_App_Base extends Solar_Controller_Page
{
    /**
     * Type of layout to use.
     *
     * @var String   The layout to use.
     */
    protected $_layout         = 'main';

    /**
     * The default action
     *
     * This is the default action called when this
     * controller is invoked.
     *
     * @var string   The default action to invoke.
     */
    protected $_action_default = 'index';
    
    /**
     * Name of the partial to use for navigation
     *
     * @var string   The name of the partial.
     */
    public $nav_partial = false;
    
    /**
     * Read-once notice to display
     *
     * @var string   The notice string.
     */
    public $flash_notice = null;
    
    /**
     * Setup method called after instantiation
     *
     * We use this to register a sql shared object needed to work with models.
     */
    protected function _setup()
    {
        Solar_Registry::set('sql', Solar::factory('Solar_Sql'));
        $this->flash_notice = $this->_session->getFlash('notice');
    }
}
