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
                    'first_name' => $this->input->post('first_name'),
                    'last_name'  => $this->input->post('last_name'),
                    'company'    => $this->input->post('company'),
                    'phone'      => $this->input->post('phone')
                );

            if($this->ion_auth->register($this->input->post('username'), 
                $this->input->post('password'), $this->input->post('email'), $additionalData))
            {
                $this->flash->success('Successfully created new record.');
                redirect('admin/user');
            }
        }
    }

    public function edit($id = false)
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean');
        $this->form_validation->set_rules('company', 'Company', 'xss_clean');
        $this->form_validation->set_rules('phone', 'Phone', 'xss_clean|numeric');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', '');

        if($this->form_validation->run())
        {
            $updateData = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name'  => $this->input->post('last_name'),
                    'company'    => $this->input->post('company'),
                    'phone'      => $this->input->post('phone'),
                    'email'      => $this->input->post('email'),
                    'username'   => $this->input->post('username')
                );

            if(strlen($this->input->post('password')))
            {
                $updateData['password'] = $this->input->post('password');
            }

            if($this->ion_auth->update_user($this->input->post('id'), $updateData))
            {
                $this->flash->success('Successfully updated the record.');
                redirect('admin/user');
            }
        }

        $this->data['user'] = $this->ion_auth->get_user($id);

        if(!$this->data['user']) 
        {
            show_404();
        } 
    }

    public function delete($id = false)
    {
        if($this->ion_auth->get_user($id))
        {
            $this->ion_auth->delete_user($id);
            $this->flash->success('Successfully deleted the record.');
            redirect('admin/user');
        }

        show_404();
    }
}

/* End of file user.php */
/* Location: ./application/controllers/admin/user.php */