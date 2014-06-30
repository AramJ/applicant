<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index()
    {
        $mainPassedArray = array(
            "isDays" => true,
            "isProfile" => false
        );
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('main',$mainPassedArray);
    }
}
