<?php
/**
 * Any actions done by a mentor is going to be 
 * done here.
 *
 * @todo Develop actionReview
 * @todo Develop actionComment
 * @todo Develop actionLivetesting
 */
class PHP_App_Mentors extends PHP_App_Base
{
    /**
     * Name of the partial to use for navigation
     *
     * @var string   The name of the partial.
     */
    public $nav_partial = '_mentors_nav';
    
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
        $this->output = 'MENTORS_WELCOME';
    }

    public function actionLogin()
    {
    }

    /**
     * Announce action
     *
     * This is where we are supose to handle
     * the action of adding new announcement 
     * somewhere...
     *
     * @see    $this->_request
     * @return void
     */
    public function actionAnnounce()
    {
        $title = $this->_request->post('title');
        $text  = $this->_request->post('announcement');

        if (!is_null($title) && !is_null($text)) {
            /**
             * @TODO:
             * Get the username that did this,
             * Invoke the model and save the text
             * and title.
             */
        }
        
    }
}
