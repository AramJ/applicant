<?php


class Admin_model extends CI_Model
{
    public static function get_users($teachingGroup,$con)
    {
        $result = $con->get_where('usertb',array('teaching_group' => $teachingGroup));
        if($result->num_rows>0)
        {
            return $result;
        }
        else
            return false;
    }
} 