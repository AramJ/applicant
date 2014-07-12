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

    public static function delete_user($melliCode, $con)
    {
        $result = $con->delete('usertb',array(
            'melli_code' => $melliCode
        ));
        return $result;
    }

    public static function accept_user($melliCode, $con)
    {
        $data = array(
           'is_approved' => 1,
        );
        $con->where('melli_code',$melliCode);
        $con->update('usertb',$data);
    }
} 