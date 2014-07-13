
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('register');
    }

    public function submited_form(){

        $this->load->model("register_model");
        $this->load->library('encrypt');
        $this->load->library('Hash');

        $name = $this->input->post('name');
        if($name == "")
        {
            echo "فیلد نام نباید خالی باشد";
            return;
        }
        $family = $this->input->post('family');
        if($family == "")
        {
            echo "فیلد نام خانوادگی نباید خالی باشد";
            return;
        }
        $gender = $this->input->post('gender');
        $father_name = $this->input->post('father_name');
        if($father_name == "")
        {
            echo "فیلد نام پدر نباید خالی باشد";
            return;
        }
        $shenasname_number = $this->input->post('shenasname_number');
        if($shenasname_number == "")
        {
            echo "فیلد شماره شناسنامه نباید خالی باشد";
            return;
        }
        if(!is_numeric($shenasname_number))
        {
            echo "فیلد شماره شناسنامه تنها میتواند شامل اعداد باشد";
            return;
        }
        $birth_date = $this->input->post('birth_date');
        if($birth_date == "")
        {
            echo "فیلد تاریخ تولد نباید خالی باشد";
            return;
        }
        $birth_location = $this->input->post('birth_location');
        if($birth_location == "")
        {
            echo "فیلد محل تولد نباید خالی باشد";
            return;
        }
        $shenasname_place = $this->input->post('shenasname_place');
        if($shenasname_place == "")
        {
            echo "فیلد محل صدور نباید خالی باشد";
            return;
        }
        $religion = $this->input->post('religion');
        if($religion == "")
        {
            echo "فیلد مذهب نباید خالی باشد";
            return;
        }
        $marriage_situation = 1;
        if($this->input->post('marriage_situation') == "single")
            $marriage_situation = 0;
        $nezam_vazife_situation = $this->input->post('nezam_vazife_situation');
        if($nezam_vazife_situation == "")
        {
            if($gender == 0)
            {
                echo "برای افراد مذکر وضعیت نظام وظیفه الزامی است";
                return;
            }
        }
        $melli_code = $this->input->post('melli_code');
        if(strlen($melli_code)!=10)
        {
            echo "فیلد کد ملی باید شامل 10 حرف باشد";
            return;
        }
        if(!is_numeric($melli_code))
        {
            echo "فیلد کد ملی باید فقط از عدد تشکیل شده باشد";
            return;
        }
        $elmi_situation = $this->input->post('elmi_situation');
        if($elmi_situation == "")
        {
            echo "فیلد وضعیت علمی نباید خالی باشد";
            return;
        }
        $teaching_group = $this->input->post('teaching_group');
        if($teaching_group == "")
        {
            echo "فیلد گروه آموزشی نباید خالی باشد";
            return;
        }
        $teaching_maqtaa = $this->input->post('teaching_maqtaa');
        if($teaching_maqtaa == "")
        {
            echo "نباید مقطع آموزشی خالی باشد";
            return;
        }
        $email = $this->input->post('email');
        if($email == "")
        {
            echo "فیلد ایمیل نباید خالی باشد";
            return;
        }
        if( !preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i", $email) ) {
            echo 'ایمیل وارد شده صحیح نمیباشد';
            return;
        }
        $work_address = $this->input->post('work_address');
        if($work_address == "")
        {
            echo "فیلد آدرس محل کار نباید خالی باشد";
            return;
        }
        $home_address = $this->input->post('home_address');
        if($home_address == "")
        {
            echo "فیلد آدرس منزل نباید خالی باشد";
            return;
        }
        $tel_home = $this->input->post('tel_home');
        if($tel_home == "")
        {
            echo "فیلد تلفن منزل نباید خالی باشد";
            return;
        }
        $sw = 0;
        for($i=0 ; $i<strlen($tel_home) ; $i++)
        {
            if($tel_home[$i]!="+" && $tel_home[$i]!="-" && $tel_home[$i]!=" " && ($tel_home[$i] < '0' || $tel_home[$i] > '9'))
            {
                $sw = 1;
                break;
            }
        }
        if($sw == 1)
        {
            echo "فیلد تلفن منزل تنها میتواند شامل عدد، بعلاوه، خط تیره و فاصله باشد";
            return;
        }
        $tel_work = $this->input->post('tel_work');
        if($tel_work == "")
        {
            echo "فیلد تلفن محل کار نباید خالی باشد";
            return;
        }
        $sw = 0;
        for($i=0 ; $i<strlen($tel_work) ; $i++)
        {
            if($tel_work[$i]!="+" && $tel_work[$i]!="-" && $tel_work[$i]!=" " && ($tel_work[$i] < '0' || $tel_work[$i] > '9'))
            {
                $sw = 1;
                break;
            }
        }
        if($sw == 1)
        {
            echo "فیلد تلفن محل کار تنها میتواند شامل عدد، بعلاوه، فاصله و خط تیره باشد";
            return;
        }
        $mobile = $this->input->post('mobile');
        if($mobile == "")
        {
            echo "فیلد مبایل نباید خالی باشد";
            return;
        }
        $sw = 0;
        for($i=0 ; $i<strlen($mobile) ; $i++)
        {
            if($mobile[$i]!="+" && $mobile[$i]!="-" && $mobile[$i]!=" " && ($mobile[$i] < '0' || $mobile[$i] > '9'))
            {
                $sw = 1;
                break;
            }
        }
        if($sw == 1)
        {
            echo "فیلد مبایل تنها میتواند شامل عدد، بعلاوه، فاصله و خط تیره باشد";
            return;
        }
        $password = $this->input->post('password');
        if(strlen($password) < 5)
        {
            echo "نباید فیلد پسورد کمتر از 5 حرف باشد";
            return;
        }
        $encryptedPassword = Hash::create('sha256',$password,$this->config->item('encryption_key'));
        $encryptedPassword = $this->encrypt->sha1($encryptedPassword);
        $result = $this->register_model->add_register($gender, $name, $family, $father_name, $shenasname_number, $birth_date, $birth_location, $shenasname_place, $religion, $marriage_situation, $nezam_vazife_situation, $melli_code, $elmi_situation, $teaching_group , $tel_home, $email, $work_address, $home_address, $tel_work, $mobile, $teaching_maqtaa,$encryptedPassword,$this->db);
        if($result == true)
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
