<?php
/**
 * Created by PhpStorm.
 * Date: 6/20/14
 * Time: 12:37 PM
 */

class Login_model extends CI_Model
{

    public static function checkLogin($melliCode, $password,$con)
    {
        $result = $con->get_where('usertb',array('melli_code' => $melliCode , 'password' => $password));
        if($result->num_rows>0)
        {
            return $result;
        }
        else
            return false;
    }
} 