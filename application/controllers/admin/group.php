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
        $this->form_validation->set_rules('name', 'Group Name', 'required|xss_clean');
        $this->form_validation->set_rules('description', 'Description', 'required|xss_clean');

        if($this->form_validation->run())
        {
            $insertData = array(
                    'name'        => $this->input->post('name'),
                    'description' => $this->input->post('description')
                );

            if($this->group->insert($insertData))
            {
                $this->flash->success('Successfully created new record.');
                redirect('admin/group');
            }
        }
    }

    public function edit($id = false)
    {
        $this->form_validation->set_rules('name', 'Group Name', 'required|xss_clean');
        $this->form_validation->set_rules('description', 'Description', 'required|xss_clean');

        if($this->form_validation->run())
        {
            $updateData = array(
                    'name'        => $this->input->post('name'),
                    'description' => $this->input->post('description')
                );

            if($this->group->update($this->input->post('id'), $updateData))
            {
                $this->flash->success('Successfully updated the record.');
                redirect('admin/group');
            }
        }

        $this->data['group'] = $this->group->get($id);

        if(!$this->data['group']) 
        {
            show_404();
        } 
    }

    public function delete($id = false)
    {
        if($this->group->get($id))
        {
            $this->group->delete($id);
            $this->flash->success('Successfully deleted the record.');
            redirect('admin/group');
        }

        show_404();
    }
}

/* End of file group.php */
/* Location: ./application/controllers/admin/group.php */