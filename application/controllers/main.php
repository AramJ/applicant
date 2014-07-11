<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    private function checkLoginState()
    {
        $this->load->helper('url');
        $this->load->library('session');
        if($this->session->userdata('melli_code') == false)
        {
            redirect('/login/', 'refresh');
            return false;
        }
        else if($this->session->userdata('isAdmin') == 1)
        {
            redirect('/admin_main/', 'refresh');
            return false;
        }
        else
            return "normal user";
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
        $this->load->model('day_model');
        $result = $this->day_model->get_coming_hours($melliCode,$this->db);
        $dataTimes = array();
        if($result!=false)
        {
            foreach($result->result() as $row)
            {
                $dataTimes[] = array(
                        'day_of_week' => $row->day_of_week,
                        'start_time' => $row->start_time,
                        'end_time' => $row->end_time,
                        'id' => $row->id
                    );
            }
        }
        $courses = $this->day_model->get_courses($teachingGroup,$this->db);
        $dataCourses = array();
        if($courses!=false)
        {
            foreach($courses->result() as $row)
            {
                $dataCourses[] = array(
                    'course_name' => $row->course_name,
                    'course_code' => $row->course_code
                );
            }
        }

        $courseUser = $this->day_model->get_course_user($melliCode,$this->db);
        $dataUserCourses = array();
        if($courseUser!=false)
        {
            foreach($courseUser->result() as $row)
            {
                $dataUserCourses[] = array(
                    'course_name' => $row->course_name,
                    'course_code' => $row->course_code,
                );
            }
        }

        if($result!=false)
        {
            foreach($result->result() as $row)
            {
                $data[] = array(
                    'day_of_week' => $row->day_of_week,
                    'start_time' => $row->start_time,
                    'end_time' => $row->end_time,
                    'id' => $row->id
                );
            }
        }
        $mainPassedArray = array(
            "isInsertDateMode" => true,
            "isProfileMode" => false,
            "gender" => $gender,
            "name" => $name,
            "times" => $dataTimes,
            "courses" => $dataCourses,
            "userCourses" => $dataUserCourses
        );
        $this->load->view('header');
        $this->load->view('main',$mainPassedArray);
    }

    public function deleteTime()
    {
        $this->checkLoginState();
        $this->load->model('day_model');
        $id = $this->input->post('id');
        $this->day_model->delete_day($id,$this->db);
        if($this->db->_error_message() == "")
            echo "yes";
        else
            echo "no";
    }

    public function deleteCourse()
    {
        $this->checkLoginState();
        $this->load->model('day_model');
        $this->load->library('session');
        $melliCode = $this->session->userdata('melli_code');
        $courseCode = $this->input->post('course_code');
        $result = $this->day_model->delete_course_user($melliCode, $courseCode,$this->db);
        if($result == "")
            echo "yes";
        else
            echo "no";
    }

    public function addTime()
    {
        $this->checkLoginState();
        $this->load->model('day_model');
        $this->load->library('session');
        $melliCode = $this->session->userdata('melli_code');
        $weekDay = $this->input->post('weekDay');
        $startTime = $this->input->post('startTime').":00";
        $endTime = $this->input->post('endTime').":00";
        $result = $this->day_model->get_coming_hours($melliCode,$this->db);
        if($result != false)
        {
            foreach($result->result() as $row)
            {
                if($row->day_of_week == $weekDay)
                {
                    if($startTime <= $row->start_time && $endTime >= $row->end_time)
                    {
                        echo "conflict";
                        return;
                    }
                    if($endTime <= $row->end_time && $endTime >= $row->start_time)
                    {
                        echo "conflict";
                        return;
                    }
                    if($startTime >= $row->start_time && $startTime <= $row->end_time)
                    {
                        echo "conflict";
                        return;
                    }
                }
            }
        }
        $result = $this->day_model->add_day($melliCode,$weekDay,$startTime, $endTime,$this->db);
        if($this->db->_error_message() == "")
            echo "yes".$result;
        else
            echo "no";
    }

    public function addCourse()
    {
        $this->checkLoginState();
        $this->load->model('day_model');
        $this->load->library('session');
        $melliCode = $this->session->userdata('melli_code');
        $courseCode = $this->input->post('course_code');
        $result = $this->day_model->get_course_user($melliCode,$this->db);
        if($result != false)
        {
            foreach($result->result() as $row)
            {
                if($row->course_code == $courseCode)
                {
                    echo "conflict";
                    return;
                }
            }
        }
        $result = $this->day_model->add_course_user($melliCode,$courseCode,$this->db);
        if($this->db->_error_message() == "")
            echo "yes".$result;
        else
            echo "no";
    }
}
