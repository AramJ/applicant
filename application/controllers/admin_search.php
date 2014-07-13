
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_search extends CI_Controller {

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
        $teachingGroup = $this->session->userdata('teaching_group');
        $name = $this->session->userdata('name') . " " . $this->session->userdata('family');
        $gender = $this->session->userdata('gender');
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
        $mainPassedArray = array(
            "isAdmin_main" => false,
            "isAdmin_search" => true,
            "gender" => $gender,
            "courses" => $dataCourses,
            "name" => $name
        );
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('admin_search',$mainPassedArray);
    }

    public function search()
    {
        $this->checkLoginState();
        $this->load->model('admin_model');
        $course = $this->input->get('course');
        if($course == 'nil')
            $course = "";
        $startTime = $this->input->get('startTime');
        $endTime = $this->input->get('endTime');
        $weekDay = $this->input->get('weekDay');
        if($weekDay == "")
            $weekDay = "";
        $query = "select ut.name,ut.family, uc.course_name, ut.day_of_week, ut.start_time, ut.end_time from  "
                ."(select usertb.melli_code, usertb.name, usertb.family, timetb.start_time, timetb.end_time, "
                ."timetb.day_of_week from usertb left join timetb on usertb.melli_code = timetb.melli_code)  "
                ."as ut	left join (SELECT melli_code,course_name FROM user_coursetb LEFT JOIN coursetb ON    "
                ."user_coursetb.course_code = coursetb.course_code) as uc on ut.melli_code = uc.melli_code   "
                ."where true";
        if($startTime!="")
        {
            $query .= " and start_time >= '".$startTime.":00'";
        }
        if($endTime!="")
        {
            $query .= " and end_time <= '".$endTime.":00'";
        }
        if($weekDay!="0")
        {
            $query.= " and day_of_week = ".$weekDay;
        }
        if($course!="bad")
        {
            $query.= " and course_name = '".$course."'";
        }
        //echo $query."<br/>";
        $result = $this->admin_model->search($query,$this->db);
        echo "<head><meta charset='utf8'/></head>";
        echo "<table class='table table-stripped table-hover table-responsive'>";
        echo "<thead><tr><th>";
        echo "نام";
        echo "</th><th>";
        echo "نام درس";
        echo "</th><th>";
        echo "روز هفته";
        echo "</th><th>";
        echo "ساعت شروع";
        echo "</th><th>";
        echo "ساعت پایان";
        echo "</th></tr></thead><tbody>";
        $week_days = array(
            1 => "شنبه",
            2 => "یکشنبه",
            3 => "دوشتبه",
            4 => "سه شنبه",
            5 => "چهارشنبه",
            6 => "پنجشنبه"
        );
        foreach($result->result() as $row) {

            echo "<tr>";
            echo "<td>";
            echo $row->name . " " . $row->family;
            echo "</td>";
            echo "<td>";
            if(isset($row->course_name))
                echo $row->course_name;
            else
                echo "درسی را انتخاب نکرده است";
            echo "</td>";
            echo "<td>";
            if(isset($row->day_of_week))
                echo $week_days[$row->day_of_week];
            else
                echo "روزی از هفته را برای تدریس انتخاب نکرده است";
            echo "</td>";
            echo "<td>";
            if(isset($row->start_time))
                echo $row->start_time;
            else
                echo "ساعتی را برای تدریس انتخاب نکرده است";
            echo "</td>";
            echo "<td>";
            if(isset($row->end_time))
                echo $row->end_time;
            else
                echo "ساعتی را برای تدریس انتخاب نکرده است";
            echo "</td>";
            echo "</tr>";
        }
        return;
    }

    public function salam()
    {
        echo "<pre>";
        print_r($this->db);
        echo "</pre>";
        $query = "select ut.name,ut.family, uc.course_name, ut.day_of_week, ut.start_time, ut.end_time from  "
                ."(select usertb.melli_code, usertb.name, usertb.family, timetb.start_time, timetb.end_time, "
                ."timetb.day_of_week from usertb left join timetb on usertb.melli_code = timetb.melli_code)  "
                ."as ut	left join (SELECT melli_code,course_name FROM user_coursetb LEFT JOIN coursetb ON    "
                ."user_coursetb.course_code = coursetb.course_code) as uc on ut.melli_code = uc.melli_code   ";
        echo $query;
    }
}
