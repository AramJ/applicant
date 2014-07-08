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
<div class="row borders">
    <div class="container">
        <div class="row loginForm">
            <p class="col-xs-12 contentHeader">ورود به سیستم</p>
        </div>
        <div class="row loginForm">
            <form name="login_form" role="form">
                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr" for="username">نام کاربری</label>
                        <input class="form-control col-xs-7 rtlText font-model" type="text" id="username" placeholder="لطفا کد ملی خود را وارد نمایید">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr" for="password">رمز عبور</label>
                        <input class="form-control col-xs-7 rtlText font-model" type="password" id="password" placeholder="لطفا کلمه عبور خود را در اینجا وارد کنید">
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-primary col-xs-2 col-xs-offset-4 font-model" id="login_btn">ورود</button>
                    <button class="btn btn-warning font-model" id="register_page"">ثبت نام</button>
                </div>
            </form>
        </div>
    </div>
</div>