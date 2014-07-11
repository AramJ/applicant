<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_main extends CI_Controller {

    private function checkLoginState()
    {
        $this->load->helper('url');
        $this->load->library('session');
        if($this->session->userdata('melli_code') == false)
        {
            redirect('/login/', 'refresh');
            return false;
        }
        else if($this->session->userdata('isAdmin') == 0)
        {
            redirect('/main/', 'refresh');
            return false;
        }
        else
            return "admin user";
    }

    public function index()
    {

        $this->checkLoginState();
        $this->load->model('day_model');
        $this->load->library('session');
        $melliCode = $this->session->userdata('melli_code');
        $teachingGroup = $this->session->userdata('teaching_group');
        $name = $this->session->userdata('name') . " " . $this->session->userdata('family');
        $gender = $this->session->userdata('gender');
        $this->load->model('admin_model');
        $result = $this->admin_model->get_users($teachingGroup,$this->db);
        $userData = array();
        if($result!=false)
        {
            foreach($result->result() as $row)
            {
                if($row->teaching_group == $teachingGroup && $row->admin_user == 0)
                {
                    $userData[] = array(
                        'name'                  => $row->name,
                        'family'                => $row->family,
                        'father_name'           => $row->father_name,
                        'shenasname_number'     => $row->shenasname_number,
                        'birth_date'            => $row->birth_date,
                        'birth_location'        => $row->birth_location,
                        'shenasname_place'      => $row->shenasname_place,
                        'marriage_situation'    => $row->marriage_situation,
                        'nezam_vazife_situation'=> $row->nezam_vazife_situation,
                        'melli_code'            => $row->melli_code,
                        'elmi_situation'        => $row->elmi_situation,
                        'teaching_group'        => $row->teaching_group,
                        'tel_home'              => $row->tel_home,
                        'email'                 => $row->email,
                        'tel_work'              => $row->tel_work,
                        'mobile'                => $row->mobile,
                        'teaching_maqtaa'       => $row->teaching_maqtaa,
                        'password'              => $row->password,
                        'admin_user'            => $row->admin_user,
                        'religion'              => $row->religion,
                        'work_address'          => $row->work_address,
                        'home_address'          => $row->home_address,
                        'is_approved'           => $row->is_approved,
                        'gender'                => $row->gender
                    );
                }
            }
        }
        $mainPassedArray = array(
            "isAdmin_main" => true,
            "isAdmin_search" => false,
            "gender" => $gender,
            "name" => $name,
            "users" => $userData
        );
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('admin_main',$mainPassedArray);
    }
}
