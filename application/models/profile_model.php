<?php
/**
 * Created by PhpStorm.
 * Date: 6/20/14
 * Time: 12:37 PM
 */

class Profile_model extends CI_Model
{
    public static function changePassword($melliCode,$encryptedPassword,$con)
    {
        $data = array(
            'password' => $encryptedPassword,
        );
        $con->where('melli_code',$melliCode);
        $con->update('usertb',$data);
    }
} 