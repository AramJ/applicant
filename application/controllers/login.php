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
        $melliCode = $this->input->post('username');
        $password = $this->input->post('password');
        $encryptedPassword = Hash::create('sha256',$password,$this->config->item('encryption_key'));
        $encryptedPassword = $this->encrypt->sha1($encryptedPassword);
        $result = $this->login_model->checkLogin($melliCode,$encryptedPassword,$this->db);
        if($result != false)
        {
            foreach($result->result() as $row)
            {
                $data = array(
                    'melli_code' => $row->melli_code,
                    'name' => $row->name,
                    'isAdmin' => $row->admin_user
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
