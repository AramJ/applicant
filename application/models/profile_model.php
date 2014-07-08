<?php
/**
 * Created by PhpStorm.
 * Date: 6/20/14
 * Time: 12:37 PM
 */

class Profile_model extends CI_Model
{
    /*
     * Checks for the login status whether the username password are valid or not
     * @param $melliCode
     * @return bool|resource
     */
    public static function change_values($melliCode,$con)
    {
        $result = $con->get_where('usertb',array('melliCode' => $melliCode));
        if($result->num_rows>0)
        {
            return $result;
        }
        else
            return false;
    }
} 