<?php
/**
 * Created by PhpStorm.
 * User: Najmeh
 * Date: 6/23/14
 * Time: 12:21 AM
 */ ?>
<script>
    $(document).ready(function(){

        $("#cancel_button").click(function(){
            window.location = "<?php echo base_url();?>index.php/login/";
            return false;
        });

        $("#register_btn").click(function(){

            var name = $("#name").val();
            var family = $("#family").val();
            var father_name = $("#father_name").val();
            var shenasname_number = $("#shenasname_number").val();
            var birth_date = $("#birth_date").val();
            var birth_location = $("#birth_location").val();
            var shenasname_place = $("#shenasname_place").val();
            var religion = $("#religion").val();
            var marriage_situation = $("input:radio[name=marriage]:checked").val();
            var gender = $("input:radio[name=gender]:checked").val();
            var nezam_vazife_situation = $("#nezam_vazife_situation").val();
            var melli_code = $("#melli_code").val();
            var elmi_situation = $("#elmi_situation").val();
            var teaching_group = $("#teaching_group").val();
            var tel_home = $("#tel_home").val();
            var email = $("#email").val();
            var work_address = $("#work_address").val();
            var home_address = $("#home_address").val();
            var tel_work = $("#tel_work").val();
            var mobile = $("#mobile").val();
            var teaching_maqtaa = $("#teaching_maqtaa").val();
            var password = $("#password").val();
            var myData = {
                "name":name,
                "family":family,
                "gender":gender,
                "father_name":father_name,
                "shenasname_number":shenasname_number,
                "birth_date":birth_date,
                "birth_location":birth_location,
                "shenasname_place":shenasname_place,
                "religion":religion,
                "marriage_situation":marriage_situation,
                "nezam_vazife_situation":nezam_vazife_situation,
                "melli_code":melli_code,
                "elmi_situation":elmi_situation,
                "teaching_group":teaching_group,
                "tel_home":tel_home,
                "email":email,
                "work_address":work_address,
                "home_address":home_address,
                "tel_work":tel_work,
                "mobile":mobile,
                "teaching_maqtaa":teaching_maqtaa,
                "password":password};

            //alert(JSON.stringify(myData, null, 4));

            request = $.ajax({
                url:"<?php echo base_url(); ?>index.php/register/submited_form",
                type:"POST",
                data:myData,
                success:function(result){
                    console.log(result);
                    if(result.indexOf("yes") > -1)
                    {
                        $.notify("حساب کاربری شما با موفقیت ثبت شد و پس از تایید توسط مدیر مربوطه فعال خواهد شد","success")
                        setTimeout(function(){
                            window.location = "<?php echo base_url();?>index.php/login";
                        }, 2000);
                    }
                    else{
                        $.notify(result,"error");
                    }
                },
                beforeSend:function()
                {
                },
                error: function(xhr, status, error) {
                    $.notify("متاسفانه در حال حاضر امکان ارتباط با سرور وجود ندارد","error");
                }
            });
            return false;
        });
    });
</script>






<!--
        These codes are for registeration.
-->
<div class="row borders">
    <div class="container">
        <div class="row">
            <p class="col-xs-12 contentHeader">ثبت نام در سیستم</p>
        </div>
        <form name="register_form" action="<?php echo base_url(); ?>index.php/register/" method="post">
            <div class="row  middleForm">

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">نام</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="name" id="name" placeholder="نام خود را وارد نمایید">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">نام خانوادگی</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="family" id="family" placeholder="نام خانوادگی">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">جنسیت</label>
                        <div class="height col-xs-3 col-xs-push-4 rtlText form-inline">
                            <input id="male" type="radio" name="gender" checked value="0">مذکر</input>
                        </div>
                        <div class="height col-xs-3 rtlText form-inline">
                            <input id="female" type="radio" name="gender" value="1">مونث</input>
                        </div>
                        <p class= "error_notif col-lg-5" id="notification_marriage"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">نام پدر</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="father_name" id="father_name" placeholder="نام پدر">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">شماره شناسنامه</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="shenasname_number" id="shenasname_number" placeholder="شماره شناسنامه">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">تاریخ تولد</label>
                        <input type="date" class= "height font_model form-control col-xs-7 rtlText font-model" name="birth_date" id="birth_date" placeholder="25/3/1356">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">مکان تولد</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="birth_location" id="birth_location" placeholder="مکان تولد">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">مکان صدور شناسنامه</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="shenasname_place" id="shenasname_place" placeholder="مکان صدور شناسنامه">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">مذهب</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="religion" id="religion" placeholder="مذهب">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">وضعیت ازدواج</label>
                        <div class="height col-xs-3 col-xs-push-4 rtlText form-inline">
                            <input id="married" type="radio" name="marriage" checked value="married">متاهل</input>
                        </div>
                        <div class="height col-xs-3 rtlText form-inline">
                            <input id="single" type="radio" name="marriage" value="single"> مجـرد</input>
                        </div>
                        <p class= "error_notif col-lg-5" id="notification_marriage"></p>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">وضعیت نظام وظیفه- در صورت ذکور بودن پاسخ دهید</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="nezam_vazife_situation" id="nezam_vazife_situation" placeholder="وضعیت نظام وظیقه">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">کد ملی</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="melli_code" id="melli_code" placeholder="کد ملی">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos"  >وضعیت علمی - آخرین وضعیت تحصیلی</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="elmi_situation" id="elmi_situation" placeholder="وضعیت علمی">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">گروه تدریسی</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="teaching_group" id="teaching_group" placeholder="گروه تدریسی">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">مقطع تحصیلی- که تدریس خواهید کرد</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="teaching_maqtaa" id="teaching_maqtaa" placeholder="مقطع تحصیلی">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">پست الکترونیک</label>
                        <input type="email" class= "height font_model form-control col-xs-7 rtlText font-model" name="email" id="email" placeholder="پست الکترونیک">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">آدرس محل کار</label>
                        <textarea rows="4" cols="50" type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="work_address" id="work_address" placeholder="آدرس محل کار"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">آدرس محل زندگی</label>
                        <textarea rows="4" cols="50" type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="home_address" id="home_address" placeholder="آدرس محل زندگی"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">شماره تلفن منزل</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="tel_home" id="tel_home" placeholder="شماره تلفن خانه">
                    </div>
                </div>



                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">شماره تلفن محل کار</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="tel_work" id="tel_work" placeholder="شماره تلفن محل کار">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">تلفن همراه</label>
                        <input type="text" class= "height font_model form-control col-xs-7 rtlText font-model" name="mobile" id="mobile" placeholder="تلفن همراه">
                    </div>
                </div>


                <div class="row">
                    <div class="form-group">
                        <label class="col-xs-2 col-xs-push-9 control-label font-model-titr lbl-pos">رمز عبور</label>
                        <input type="password" class= "height font_model form-control col-xs-7 rtlText font-model" name="password" id="password" placeholder="رمز عبور را وارد کنید">
                    </div>
                </div>


                <div class="row">
                    <button class="btn btn-primary col-xs-2 col-xs-offset-4 font-model btn-margin" id="register_btn">ثبت نام</button>
                    <button class="btn btn-warning col-xs-1 font-model btn-margin" id="cancel_button">انصراف</button>
                </div>
            </div>
        </form>
    </div>
</div>