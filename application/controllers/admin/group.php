<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Group Management
 * Accessible only if user is admin.
 *
 * @author Marko Aleksic <iam@markoaleksic.com>
 * @copyright Copyright (c) 2013 Marko Aleksic.
 * @link https://github.com/psybaron/Unleash
 * @license https://raw.github.com/psybaron/Unleash/master/LICENSE 
 * @package Unleash
 */
class Group extends Admin_Controller {

    public function index()
    {
        $this->data['groups'] = $this->ion_auth->get_groups();
    }

    public function create()
    {
        // views/admin/group/create.php
    }
}

/* End of file group.php */
/* Location: ./application/controllers/admin/group.php */