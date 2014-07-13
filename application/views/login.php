<?php
/**
 * Created by PhpStorm.
 * User: Najmeh
 * Date: 6/23/14
 * Time: 12:07 AM
 */ ?>
<script>
    $(document).ready(function(){
        $("#register_page").click(function(){
            window.location = "<?php echo base_url();?>index.php/register/";
            return false;
        });
        $("#login_btn").click(function(){
            var melliCode = $("#username").val();
            var password = $("#password").val();
            request = $.ajax({
                url:"<?php echo base_url(); ?>index.php/login/checkLogin",
                type:"POST",
                data:{"username":melliCode, "password":password},
                success:function(result){
                    if(result == "no")
                    {
                        $.notify( "نام کاربری / رمز عبور اشتباه می باشد","error");
                    }
                    else if(result == "not approved")
                    {
                        $.notify("حساب کاربری شما هنوز فعال نشده است","error");
                    }
                    else{
                        $.notify( "نام کاربری و کلمه عبور صحیح می باشد، لطفا چند لحظه صبر نمایید تا به صفحه داشبورد منتقل شوید","success");
                        setTimeout(function(){
                            window.location = "<?php echo base_url();?>index.php/main";
                        }, 2000);

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
                    <button class="btn btn-primary col-xs-2 col-xs-offset-4 font-model btn-margin" id="login_btn">ورود</button>
                    <button class="btn btn-warning font-model btn-margin col-xs-1" id="register_page"">ثبت نام</button>
                </div>
            </form>
        </div>
    </div>
</div>