<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Admini Core controller
 *
 * @author Marko Aleksic <iam@markoaleksic.com>
 * @package Unleash
 */
class Admin_Controller extends Authorized_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->ion_auth->is_admin())
        {
            redirect('auth/login');
        }
        
        //Administration layout
        $this->layout = 'layouts/admin';
    }
}