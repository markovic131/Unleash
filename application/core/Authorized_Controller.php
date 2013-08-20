<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Authorized Core controller
 *
 * @author Marko Aleksic <iam@markoaleksic.com>
 * @package Unleash
 */
class Authorized_Controller extends Public_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->ion_auth->logged_in())
        {
            redirect(config_item('loginRoute'));
        }

        //Authorized layout
        $this->layout = LAYOUTS . 'user';
    }
}