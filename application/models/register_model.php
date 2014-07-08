<?php
/**
 * Created by PhpStorm.
 * Date: 6/30/14
 * Time: 1:23 PM
 * Description: This function is  made for saving data in database
 */

class Register_model extends CI_Model
{
    public static function add_Register($name, $family, $fatherName, $shenasnameNumber, $birthDate, $birthLocation, $shenasnamePlace, $religion, $marriageSituation, $nezamVazifeSituation, $melliCode, $elmiSituation, $teachingGroup , $telHome, $email, $workingAdd, $livingAdd, $telWork, $mobile, $teachingMaqtaa, $con)
    {
        $result = $con->get('usertb');
        $pid = $result->num_rows +1;
        $data = array(
            'ID' => $pid,
            'name' => $name,
            'family' => $family,
            'fatherName' => $fatherName,
           'shenasnameNumber' => $shenasnameNumber,
            'birthDate' => $birthDate,
            'birthLocation' => $birthLocation,
            'shenasnamePlace' => $shenasnamePlace,
            'religion' => $religion,
            'marriageSituation' => $marriageSituation,
            'nezamVazifeSituation' => $nezamVazifeSituation,
            'melliCode' => $melliCode,
            'elmiSituation' => $elmiSituation,
            'teachingGroup' => $teachingGroup,
            'telHome' => $telHome,
            'email' => $email,
            'workingAdd' => $workingAdd,
            'livingAdd' => $livingAdd,
            'telWork' => $telWork,
            'mobile' => $mobile,
            'teachingMaqtaa' => $teachingMaqtaa,

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