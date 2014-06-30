<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/27/14
 * Time: 6:42 PM
 */ ?>
</div>
<div class="">
    <div class="row">
        <div>
         <span>
            <ul class="nav nav-tabs col-lg-offset-1 col-lg-push-6 col-lg-3">
                <li  <?php echo $isAdmin_main?'class="active"':"" ?>><a href="<?php echo base_url();?>index.php/admin_main" class="font_sidetext">تایید ثبت نام کنندگان</a></li>
                <li  <?php echo $isAdmin_search?'class="active"':"" ?>><a href="<?php echo base_url();?>index.php/admin_search" class="font_sidetext">جستجو بین ثبت نام کنندگان</a></li>
            </ul>
         </span>
        </div>
    </div>

    <div class="borders">
        <p style="margin-right: 10px" class="font_modeltitr">جستجو در بین کاربران</p></br>
        <div>
            <input type="text" class= "col-lg-2 height font_model_srch_name"  placeholder="نام کاربری" >
            <input type="text" class= "col-lg-2 height font_model_srch_day" placeholder="روز" >
            <input type="text" class= "col-lg-2 height font_model_srch_crs" placeholder="درس" >
            <button class=" btn btn-default font_dropdown place_btn_srch" type="submit">جستجو</button>
        </div>


    </div>