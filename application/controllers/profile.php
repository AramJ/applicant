<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function index()
    {
        $this->load->library('session');
        $melliCode = $this->session->userdata('melli_code');
        $name = $this->session->userdata('name') . " " . $this->session->userdata('family');
        $gender = $this->session->userdata('gender');

        $mainPassedArray = array(
            "isInsertDateMode" => false,
            "isProfileMode" => true,
            "gender" => $gender,
            "name" => $name,
        );
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('profile',$mainPassedArray);
    }

    public function changePassword()
    {
        $this->load->library('encrypt');
        $this->load->library('Hash');
        $this->load->library('session');
        $melliCode = $this->session->userdata('melli_code');
        $password = $this->input->post('password');
        $encryptedPassword = Hash::create('sha256',$password,$this->config->item('encryption_key'));
        $encryptedPassword = $this->encrypt->sha1($encryptedPassword);
        $this->load->model('profile_model');
        $this->profile_model->changePassword($melliCode,$encryptedPassword,$this->db);
        if($this->db->_error_message() == "")
        {
            echo "yes";
            return;
        }
        else
        {
            echo "no";
            return;
        }
    }
}