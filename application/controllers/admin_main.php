<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_main extends CI_Controller {
    public function index()
    {
        $mainPassedArray = array(
            "isAdmin_main" => true,
            "isAdmin_search" => false
        );
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('admin_main',$mainPassedArray);
    }
}
