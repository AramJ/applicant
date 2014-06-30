<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/23/14
 * Time: 12:07 AM
 */ ?>
</div>
<div class="borders" xmlns="http://www.w3.org/1999/html">
    <form role="form" action="<?php echo base_url(); ?>index.php/main" method="POST">
        <p class="font_modeltitr col-lg-2">وارد شدن به سیستم</p><br/>
        <div class="row  middleForm">
            <div class="col-lg-5 col-lg-offset-3">
                <div class="col-lg-2 col-lg-offset-3">
                    <div class="btn-group radio-inline"  data-toggle="buttons">
                        <label class="font_sidetext">
                            <input type="radio" name="inputLogType">کاربر
                        </label>
                        <label class="font_sidetext">
                            <input type="radio" name="inputLogType">ادمین
                        </label>
                    </div>
                </div>
                <div><input type="text" class= "col-lg-offset-3 col-lg-6 height font_model" placeholder="نام کاربری"><label class="font_sidetext height col-lg-2">نام کاربری</label></div>
                <div><input type="text" class= "col-lg-offset-3 col-lg-6 height font_model" placeholder="رمزعبور"><label class="font_sidetext height col-lg-2">رمز عبور</label></div>
                <button type="submit" class= "col-lg-offset-3 col-lg-3 height bottum font_model  btn btn-default" onclick="<?php echo base_url();?>index.php/main" >ورود</button>
                <a class= "col-lg-3 height bottum font_model height-font-link" href="<?php echo base_url();?>index.php/register">ثبت نام</a>
            </div>
        </div>
    </form>
</div>