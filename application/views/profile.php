<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/23/14
 * Time: 4:34 PM
 */?>

    <script>
        $(document).ready(function(){
            $("#changePassword").click(function()
            {
                pass1 = $("#password1").val();
                pass2 = $("#password2").val();
                if(pass1 == "")
                {
                    $("#password1").notify("فلید کلمه عبور نباید خالی باشد",{
                        position: "top right",
                        className: "error"
                    });
                }
                else if(pass2 == "")
                {
                    $("#password2").notify("فیلد تکرار کلمه عبور نباید خالی باشد",{
                        position: "top right",
                        className: "error"
                    });
                }
                else if(pass1.length < 5)
                {
                    $("#password1").notify("طول کلمه عبور باید بیش از 5 حرف باشد",{
                        position: "top right",
                        className: "error"
                    });
                }
                else if(pass2 != pass1)
                {
                    $("#password2").notify("کلمه های عبور با هم مطابقت نمیکنند",{
                        position: "top right",
                        className: "error"
                    });
                }
                else
                {
                    request = $.ajax({
                        url:"<?php echo base_url(); ?>index.php/profile/changePassword",
                        type:"POST",
                        data:{"password":pass1},
                        success:function(result){
                            console.log(result);
                            if(result == "yes")
                            {
                                $("#changePassword").notify("کلمه عبور شما با موفقیت تغییر یافت",{
                                    position: "top right",
                                    className: "success"
                                });
                            }
                            else{
                                $("#changePassword").notify("متاسفانه در حال حاظر امکان تغییر کلمه عبور وجود ندارد، لطفا مجددا تلاش کنید یا در صورت تکرار با پشتیبانی تماس بگیرید",{
                                    position: "top right",
                                    className: "error"
                                });
                            }
                        },
                        beforeSend:function()
                        {
                        },
                        error: function(xhr, status, error) {
                            $("#inputTime").notify("متاسفانه امکان افزودن این ساعت وجود ندارد، لطفا با پشتیبانی تماس بگیرید",{
                                position: "top right",
                                className: "error"
                            });
                        }
                    });
                    return false;
                }
                return false;
            });
        });
    </script>

    <div class="row">
        <div class="col-xs-12 rtlText headerWelcome">
            <?php
            echo "سلام";
            if($gender=="0")
                echo " آقای ";
            else
                echo " خانم ";
            echo $name. ". ";
            echo "به سامانه درخواست تدریس اساتید دانشگاه علم و فرهنگ خوش آمدید.";
            ?>
        </div>

    </div>
    <div class="row">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li  class="<?php echo $isInsertDateMode?'active':'' ?>"><a href="<?php echo base_url();?>index.php/main" class="font_sidetext">انتخاب درس و روز</a></li>
                <li  class="<?php echo $isProfileMode?'active':'' ?>"><a href="<?php echo base_url();?>index.php/profile" class="font_sidetext">اطلاعات شخص</a></li>
            </ul>
        </div>
    </div>
    <div class="row borders tabed-border">
        <div class="container">
            <div class="row loginForm">
                <p class="col-xs-12 contentHeader">ویرایش اطلاعات کاربری</p>
            </div>
            <div class="col-xs-12">
                <div class="row">
                    <div class="changePassword" id="changePassword">
                        <div class="row loginForm">
                            <p class="col-xs-12 contentHeader2">تغییر کلمه عبور</p>
                        </div>
                        <div class="row loginForm">
                            <form name="password_form" role="form">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr" for="name">کلمه عبور</label>
                                        <input class="form-control col-xs-7 rtlText font-model" type="password" id="password1" placeholder="لطفا کلمه عبور خود را در اینجا وارد کنید">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr" for="password">تکرار کلمه عبور</label>
                                        <input class="form-control col-xs-7 rtlText font-model" type="password" id="password2" placeholder="لطفا کلمه عبور خود را مجددا وارد نمایید">
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn btn-success col-xs-4 col-xs-offset-4 font-model" id="changePassword">ذخیره</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="changeInfo" id="changeInfo">
                        <div class="row loginForm">
                            <p class="col-xs-12 contentHeader2">تغییر اطلاعات شخصی</p>
                            <p class="col-xs-12 contentHeader3">توجه داشته باشید که در صورتی که اطلاعات زیر را تغییر دهید، حساب کاربری شما مجددا غیر فعال شده تا مجددا تایید شود</p>
                        </div>
                        <div class="row loginForm">
                            <form name="profile_form" role="form">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>