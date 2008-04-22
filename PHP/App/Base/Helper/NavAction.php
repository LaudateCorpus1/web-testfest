<?php

/**
 * Helper for navigation links.
 * 
 * It sets a 'class' attribute with 'current' as a value if the $href provided
 * corresponds to the request URI.   
 * 
 */
class PHP_App_Base_Helper_NavAction extends Solar_View_Helper_Action
{
    /**
     * Internal request object.
     * 
     * @var Solar_Request
     */
    protected $_request = null;
    
    /**
     * Constructor
     * 
     * @param array $config User-specified configuration.
     */
    public function __construct($config = null)
    {
        parent::__construct($config);
        
        $this->_request = Solar::factory('Solar_Request');
    }
    
    /**
     * Returns an action link.
     * 
     * The $text link text will be put in a span tag.
     * 
     * @param string $href The action href.
     * 
     * @param string $text A locale translation key.
     * 
     * @return string
     */
    public function navAction($text, $href)
    {
        if ($this->_request->server('REQUEST_URI') == $href) {
            return "<a class=\"current\" href=\"$href\"><span>$text</span></a>";
        }
        return "<a href=\"$href\"><span>$text</span></a>";
    }
}

?>
