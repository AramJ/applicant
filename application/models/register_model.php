<?php
/**
 * Created by PhpStorm.
 * Date: 6/30/14
 * Time: 1:23 PM
 * Description: This function is  made for saving data in database
 */

class Register_model extends CI_Model
{
    public static function add_register($gender, $name, $family, $father_name, $shenasname_number, $birth_date, $birth_location, $shenasname_place, $religion, $marriage_situation, $nezam_vazife_situation, $melli_code, $elmi_situation, $teaching_group , $tel_home, $email, $work_address, $home_address, $tel_work, $mobile, $teaching_maqtaa,$password, $con)
    {

        $data = array(
            'name' => $name,
            'gender' => $gender,
            'family' => $family,
            'father_name' => $father_name,
            'shenasname_number' => $shenasname_number,
            'birth_date' => $birth_date,
            'birth_location' => $birth_location,
            'shenasname_place' => $shenasname_place,
            'religion' => $religion,
            'marriage_situation' => $marriage_situation,
            'nezam_vazife_situation' => $nezam_vazife_situation,
            'melli_code' => $melli_code,
            'elmi_situation' => $elmi_situation,
            'teaching_group' => $teaching_group,
            'tel_home' => $tel_home,
            'email' => $email,
            'work_address' => $work_address,
            'home_address' => $home_address,
            'tel_work' => $tel_work,
            'mobile' => $mobile,
            'teaching_maqtaa' => $teaching_maqtaa,
            'password' => $password,
            'admin_user' => 0,
            'is_approved' => 0

        );
        $con->insert('usertb',$data);
        if($con)
        {
            return true;
        }

        else
        {
            return false;
        }
    }
}