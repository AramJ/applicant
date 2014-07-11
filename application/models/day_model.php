<?php


class Day_model extends CI_Model
{
    public static function get_courses($con)
    {
        $result = $con->get_where('coursetb');
        if($result->num_rows>0)
        {
            return $result;
        }
        else
            return false;
    }

    public static function get_course_user($melliCode,$con)
    {
        //$result = $con->get_where('user_coursetb',array('melli_code' => $melliCode));
        $result = $con->select('*')->from('coursetb')->join('user_coursetb', 'coursetb.course_code=user_coursetb.course_code')->where(array('user_coursetb.melli_code' => $melliCode))->get();
        if($result->num_rows>0)
        {
            return $result;
        }
        else
            return false;
    }

    public static function get_coming_hours($melliCode,$con)
    {
        $result = $con->get_where('timetb',array('melli_code' => $melliCode));
        if($result->num_rows>0)
        {
            return $result;
        }
        else
            return false;
    }

    public static function add_day($melliCode, $weekDay, $startTime, $endTime, $con)
    {
        $result = $con->insert('timetb',array(
            'melli_code' => $melliCode,
            'start_time' => $startTime,
            'end_time' => $endTime,
            'day_of_week' => $weekDay
        ));
        return $con->insert_id();
    }

    public static function delete_day($id, $con)
    {
        $result = $con->delete('timetb',array(
            'id' => $id
        ));
        return $con->insert_id();
    }
} 