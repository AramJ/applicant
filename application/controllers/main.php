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

    function add_day()
    {
        echo $this->load->model('day_model');
        $this->load->library('session');
        $melliCode = $this->session->userdata('melliCode');
        $week_day = $this->input->post('day');
        $result = $this->day_model->add_day($melliCode,$week_day,$this->db);
        if($result == true)
            echo "yes";
        else
            echo "no";
    }
}
