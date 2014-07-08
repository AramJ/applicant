<?php


class Day_model extends CI_Model
{
    public static function add_day($melliCode, $week_day,$con)
    {
        $result = $con->get_where('usertb',array('melliCode' => $melliCode , 'password' => $password));
        if($result->num_rows>0)
        {
            return $result;
        }
        else
            return false;
    }
} 