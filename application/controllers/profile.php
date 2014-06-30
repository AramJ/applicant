<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function index()
    {
        $mainPassedArray = array(
            "isDays" => false,
            "isProfile" => true
        );
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('profile',$mainPassedArray);
    }
}
