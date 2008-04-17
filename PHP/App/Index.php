<?php
/**
 * Index mockup
 *
 * This class behaves as if the /index was called
 * It is not currently 100% working, but most of it
 * is actually in place. 
 *
 * @todo Add content to layout.
 */
class PHP_App_Index extends PHP_App_Base
{
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
     * This action index when the /index root is invoked.
     *
     * @see $this->output
     * @return void
     */
    public function actionIndex()
    {
        $this->output = 'Welcome to the 2008 Test Fest';
    }
}
