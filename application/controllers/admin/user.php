<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management
 * Accessible only if user is admin.
 *
 * @author Marko Aleksic <iam@markoaleksic.com>
 * @copyright Copyright (c) 2013 Marko Aleksic.
 * @link https://github.com/psybaron/Unleash
 * @license https://raw.github.com/psybaron/Unleash/master/LICENSE 
 * @package Unleash
 */
class User extends Admin_Controller {

    public function index()
    {
        $this->data['users'] = $this->ion_auth->get_users();
    }

    public function create()
    {
        // views/admin/user/create.php
    }
}

/* End of file user.php */
/* Location: ./application/controllers/admin/user.php */