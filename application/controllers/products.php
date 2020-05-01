<?php

class Products extends CI_Controller{
    public function index(){
        $data['name'] = 'John';
        //Load View
        $data['main_content'] = 'products.php';
        $this->load->view('layouts/main', $data);
    }
}