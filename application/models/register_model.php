<?php
/**
 * Created by PhpStorm.
 * Date: 6/30/14
 * Time: 1:23 PM
 * Description: This function is  made for saving data in database
 */

class Register_model extends CI_Model
{
    public static function add_Register($personal_id,$full_name, $username, $password, $email, $mobile, $birth_Date, $con)
    {
        $queryString = "INSERT INTO usertb ( name , family, fatherName, shenasnameNumber, birthDate, birthLocation, shenasnamePlace, religion, marriageSituation, nezamVazifeSituation, melliCode, elmiSituation, teachingGroup, telHome, email, workingAdd, livingAdd, telWork, mobile, teachingMaqtaa, password) VALUES  (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $result = $con->query($queryString,array($personal_id,$full_name,$username,$password,$birth_Date,$mobile,$email));
        return true;
    }
}