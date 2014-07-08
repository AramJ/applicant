<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('login');
    }

    function checkLogin()
    {
        $this->load->model('login_model');
        $this->load->library('encrypt');
        $this->load->library('Hash');
        $this->load->library('session');
        $cheking = $this->input->post('LoginType');
        $melliCode = $this->input->post('melliCode');
        $password = $this->input->post('password');
        $encryptedPassword = Hash::create('sha256',$password,$this->config->item('encryption_key'));
        $encryptedPassword = $this->encrypt->sha1($encryptedPassword);
        echo $encryptedPassword;
        $result = $this->login_model->checkLogin($melliCode,$encryptedPassword,$this->db);
        if($result != false)
        {
            foreach($result->result() as $row)
            {
                $data = array(
                    'melliCode' => $row->melliCode,
                    'name' => $row->name,
                    'email' => $row->email
                );
                $this->session->set_userdata($data);
            }

            echo "yes";
        }
        else
        {
            echo "no";
        }
    }
}
