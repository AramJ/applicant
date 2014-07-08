
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('register');
        echo "echo";
    }

    public function submited_form(){
        $this->load->model("register_model");
        $this->load->library('encrypt');
        $this->load->library('Hash');
        $name = $this->input->post('name');
        $family = $this->input->post('family');
        $fatherName = $this->input->post('fatherName');
        $shenasnameNumber = $this->input->post('shenasnameNumber');
        $birthDate = $this->input->post('birthDate');
        $birthLocation = $this->input->post('birthLocation');
        $shenasnamePlace = $this->input->post('shenasnamePlace');
        $religion = $this->input->post('religion');
        $marriageSituation = $this->input->post('marriageSituation');
        $nezamVazifeSituation = $this->input->post('nezamVazifeSituation');
        $melliCode = $this->input->post('melliCode');
        $elmiSituation = $this->input->post('elmiSituation');
        $teachingGroup = $this->input->post('teachingGroup');
        $telHome = $this->input->post('telHome');
        $email = $this->input->post('email');
        $workingAdd = $this->input->post('workingAdd');
        $livingAdd = $this->input->post('livingAdd');
        $telWork = $this->input->post('telWork');
        $mobile = $this->input->post('mobile');
        $teachingMaqtaa = $this->input->post('teachingMaqtaa');
        //$password = $this->input->post('password');

        //$encryptedPassword = Hash::create('sha256',$password,$this->config->item('encryption_key'));
        //$encryptedPassword = $this->encrypt->sha1($encryptedPassword);
        $result = $this->register_model->add_Register($name, $family, $fatherName, $shenasnameNumber, $birthDate, $birthLocation, $shenasnamePlace, $religion, $marriageSituation, $nezamVazifeSituation, $melliCode, $elmiSituation, $teachingGroup , $telHome, $email, $workingAdd, $livingAdd, $telWork, $mobile, $teachingMaqtaa,$this->db);
        if($result == true)
        {
            ?>
            <script>
                alert("Your registration is successfuly done!\nPlease wait till your confirmation be in your mail");
            </script>
<?php
            $this->load->helper('url');
            redirect('/login/','refresh');

        }
        else
        {
            echo "no";
            $this->load->helper('url');
            redirect('/register/','refresh');
        }

    }
}
