<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/23/14
 * Time: 12:07 AM
 */ ?>
<script>
    $(document).ready(function(){

        $("#login_btn").click(function(){
            var check_log_user = document.forms["login_form"]["LoginType"].value;
            var shenasnameNumber = document.forms["login_form"]["username"].value;
            var password = document.forms["login_form"]["password"].value;
            request = $.ajax({
                url:"<?php echo base_url(); ?>index.php/login/checkLogin",
                type:"POST",
                data:{"LoginType" :check_log_user,"username":shenasnameNumber, "password":password},
                success:function(result){
                    echo result;
                    if(result == "no")
                    {
                        document.getElementById("login_notif").innerHTML = "نام کاربری / رمز عبور اشتباه می باشد";
                    }
                    else{
                        if(check_log_user == "user")
                        {
                            window.location.href = "<?php echo base_url(); ?>index.php/admin_main";
                        }
                        else{
                            window.location.href = "<?php echo base_url(); ?>index.php/main";
                        }
                    }
                },
                beforeSend:function()
                {
                },
                error: function(xhr, status, error) {
                    alert("error");
                }
            });
            return false;
        });
    });
</script>
</div>
<div class="borders" xmlns="http://www.w3.org/1999/html">
    <p class="font_modeltitr col-lg-2">وارد شدن به سیستم</p><br/>
    <form name="login_form" role="form" action="<?php echo base_url(); ?>index.php/login/checkLogin/" method="POST">
        <div class="row  middleForm">
            <div class="col-lg-5 col-lg-offset-3">
                <div class="col-lg-2 col-lg-offset-3">
                    <div class="btn-group radio-inline"  data-toggle="buttons">
                        <label class="font_sidetext">
                            کاربر
                            <input type="radio" name="LoginType" value="user">
                        </label>
                        <label class="font_sidetext">
                            ادمین
                            <input type="radio" name="LoginType" value="admin">
                        </label>
                    </div>
                </div>
                <div><input type="text" name="melliCode" class= "col-lg-offset-3 col-lg-6 height font_model" placeholder="نام کاربری"><label class="font_sidetext height col-lg-2">نام کاربری</label></div>
                <div><input type="text" name="password" class= "col-lg-offset-3 col-lg-6 height font_model" placeholder="رمزعبور"><label class="font_sidetext height col-lg-2">رمز عبور</label></div>
                <button type="submit" class= "col-lg-offset-3 col-lg-3 height bottum font_model  btn btn-default" id="login_btn">ورود</button>
                <a class= "col-lg-3 height bottum font_model height-font-link" href="<?php echo base_url();?>index.php/register">ثبت نام</a>
            </div>
        </div>
    </form>
</div>