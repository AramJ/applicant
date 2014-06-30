
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_search extends CI_Controller {
    public function index()
    {
        $mainPassedArray = array(
            "isAdmin_main" => false,
            "isAdmin_search" => true
        );
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('admin_search',$mainPassedArray);
    }
}
