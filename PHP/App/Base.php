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
}
