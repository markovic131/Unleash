<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Simple authentication class
 * for loggin in and loggging out users
 *
 * @author Marko Aleksic <iam@markoaleksic.com>
 * @copyright Copyright (c) 2013 Marko Aleksic.
 * @link https://github.com/psybaron/Unleash
 * @license https://raw.github.com/psybaron/Unleash/master/LICENSE 
 * @package Unleash
 */
class Auth extends MY_Controller
{
    public function login()
    {
        $this->layout = LAYOUTS . 'login';

        if ($this->ion_auth->logged_in())
        {
            redirect($this->config->item('base_url'), 'refresh');
        }

        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run())
        {
            if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password')))
            { 
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect('/', 'refresh');
            }
            else
            { 
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect(config_item('loginRoute'), 'refresh');
            }
        }
        else
        {
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        }
    }

    public function logout()
    {
        $this->ion_auth->logout();

        redirect($this->config->item('base_url'), 'refresh');
    }
}
