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
        if($_POST)
        {
            $this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean');
            $this->form_validation->set_rules('company', 'Company', 'xss_clean');
            $this->form_validation->set_rules('phone', 'Phone', 'xss_clean|numeric');
            $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
            $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
            $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');

            if($this->form_validation->run())
            {
                $additionalData = array(
                        'fist_name' => $this->input->post('first_name'),
                        'last_name' => $this->input->post('last_name'),
                        'company'   => $this->input->post('company'),
                        'phone'     => $this->input->post('phone')
                    );

                if($this->ion_auth->register($this->input->post('username'), 
                    $this->input->post('password'), $this->input->post('email'), $additionalData))
                {
                    redirect('admin/user');
                }
            }
        }
    }
}

/* End of file user.php */
/* Location: ./application/controllers/admin/user.php */