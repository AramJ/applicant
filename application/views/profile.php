<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/27/14
 * Time: 3:23 PM
 */?>

<div class="">
    <div class="row">
        <div>
         <span>
            <ul class="nav nav-tabs col-lg-offset-1 col-lg-push-6 col-lg-3">
                <li  <?php echo $isDays?'class="active"':"" ?>><a href="<?php echo base_url();?>/index.php/main" class="font_sidetext">انتخاب درس و روز</a></li>
                <li  <?php echo $isProfile?'class="active"':"" ?>><a href="<?php echo base_url();?>/index.php/profile" class="font_sidetext">اطلاعات شخص</a></li>
            </ul>
         </span>
        </div>
    </div>


    <div class="borders" style="
    height: 600px;
    ">
        <form action="<?php echo base_url();?>/index.php/profile/change_values" method="post">
            <input type="text" class= "col-lg-offset-3 col-lg-3 height font_model_chng" style="text-align: right;" placeholder="نام" >
            <p class="font_sidetext height col-lg-1">نام</p>

            <input type="text" class= "col-lg-offset-3 col-lg-3 height font_model_chng" style="text-align: right;" placeholder="نام خانوادگی" >
            <p class="font_sidetext height col-lg-1">نام خانوادگی</p>

            <input type="text" class= "col-lg-offset-3 col-lg-3 height font_model_chng" style="text-align: right;" placeholder="" >
            <p class="font_sidetext height col-lg-1"></p>


            <button type="submit" class= "col-lg-1 height bottum font_model  btn btn-default chng-btn" >تغییر</button>
        </form>
    </div>
   </div>