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


    <div class="borders">
    <div><input type="text" class= "col-lg-offset-3 col-lg-3 height font_model_chng" value="" placeholder="نام کاربری" ><p class="font_sidetext height col-lg-1">نام کاربری</p>
        <button type="submit" class= "col-lg-1 height bottum font_model  btn btn-default chng-btn" onclick="" >تغییر</button>
    </div>
</div>
   </div>