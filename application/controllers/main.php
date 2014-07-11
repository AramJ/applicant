<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index()
    {
        $this->load->model('day_model');
        $this->load->library('session');
        $melliCode = $this->session->userdata('melli_code');
        $name = $this->session->userdata('name') . " " . $this->session->userdata('family');
        $gender = $this->session->userdata('gender');
        $this->load->model('day_model');
        $result = $this->day_model->get_coming_hours($melliCode,$this->db);
        $data = array();
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
            "times" => $data
        );
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('main',$mainPassedArray);
    }

    public function deleteTime()
    {
        $this->load->model('day_model');
        $this->load->library('session');
        $id = $this->input->post('id');
        $this->day_model->delete_day($id,$this->db);
        if($this->db->_error_message() == "")
            echo "yes";
        else
            echo "no";
    }

    public function addTime()
    {
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
                   /* echo $startTime." ".$endTime."<br/>";
                    echo "<pre>";
                    print_r($row);
                    echo "</pre><br/>";
                    echo $endTime. " " .$row->end_time . " " . ($endTime <= $row->end_time?"t":"f") . "<br/>";
                    echo $endTime. " " .$row->start_time . " " . ($endTime >= $row->start_time?"t":"f") . "<br/>";
                    */
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
}
