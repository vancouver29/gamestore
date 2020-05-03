<?php

class Users extends CI_Controller{
    public function register(){
        //Validation Rules
        $this->form_validation->set_rules('first_name','First Name','trim|required');
        $this->form_validation->set_rules('last_name','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');

        $this->form_validation->set_rules('username','UserName','trim|required|max_length[16]|min_length[4]');
        $this->form_validation->set_rules('password','Password','trim|required|max_length[50]|min_length[4]');
        $this->form_validation->set_rules('password2','Confirm Password','trim|required|matches[password]');


        if ($this->form_validation->run() == FALSE) {
            //Show View
            $data['main_content'] = 'register';
            $this->load->view('layouts/main', $data);
        }
        else {
            if ($this->User_model->register()) {
                $this->session->set_flashdata('registered', 'You are now registered and can login');
                redirect('http://localhost:8888/gameStore/products');
            }
        }


    }
}
