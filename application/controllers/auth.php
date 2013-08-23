<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Simple Authentication Class
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
    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect($this->config->item('base_url'));
        }

        redirect('auth/login');
    }

    public function login()
    {
        $this->layout = LAYOUTS . 'login';

        if ($this->ion_auth->logged_in())
        {
            redirect($this->config->item('base_url'));
        }

        $this->data['message'] = '';
    }

    public function postLogin()
    {
        $this->form_validation->set_rules('identity', 'Username/Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run())
        {
            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password')))
            {
                $this->output->set_status_header(200);
                $data['redirect'] = ($this->ion_auth->is_admin()) ? '/admin/home' : '/user/home' ;
            }
            else
            {
                $this->output->set_status_header(401);
                $data['message'] = $this->ion_auth->errors();
            }
        }
        else
        {
            $this->output->set_status_header(401);
            $data['message'] = (validation_errors()) ? validation_errors('<li>','</li>') : $this->session->flashdata('message');
        }

        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
    }

    public function logout()
    {
        $this->ion_auth->logout();

        redirect($this->config->item('base_url'));
    }
}
