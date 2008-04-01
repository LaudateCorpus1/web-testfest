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
     * The output to display. This is mostly an
     * example of anything running with variables.
     *
     * @var string    The output variable
     */
    public $output = '';

    /**
     * Action index.
     *
     * This action index when the /contributors root is invoked.
     *
     * The string passed to this output is the string that you can
     * get through $this->getText() which will then be i18ned to whichever
     * language it is set in your locale and in your locale folder.
     *
     * @see $this->output
     * @return void
     */
    public function actionIndex()
    {
        $this->output = 'CONTRIBUTORS_WELCOME';
    }
}
