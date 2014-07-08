<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/23/14
 * Time: 12:21 AM
 */ ?>
</div>
<script>
    $(document).ready(function(){
        /*
         * If click the register button
         */
        var check_register_validity=0;
        $("#register_button").click(function(){
            if(check_register_validity == 1)
            {
                /*
                 * If complete the form correctly
                 */
                var username = document.forms["registerForm"]["username"].value;
                var full_name = document.forms["registerForm"]["full_name"].value;
                var password = document.forms["registerForm"]["password"].value;
                var email = document.forms["registerForm"]["email"].value;
                var mobile = document.forms["registerForm"]["mobile"].value;
                var birth_date = document.forms["registerForm"]["birth_date"].value;

                request = $.ajax({

                    url:"<?php echo base_url(); ?>index.php/register/submited_form",
                    type:"POST",
                    data:{"username":username,"full_name":full_name,"password":password,"email":email,"mobile":mobile,"birth_date":birth_date},
                    success:function(result){
                        if(result == "yes")
                        {
                            alert("ثبت نام شما با موفقیت انجام شد.");
                        }
                        else{
                            alert("شما قادر به ثبت نام نمی باشید.");
                        }
                    },
                    beforeSend:function()
                    {
                    },
                    error: function(xhr, status, error) {
                        alert("error");
                    }

                });

            }
            else
            {

            }
        });

 //check not being empty, special texts
        $("#email").blur(function(){

            var email = document.forms["registerForm"]["email"].value;
            if (email == null || email == "") {
                document.getElementById("notification_email").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_name").innerHTML = "";

                check_register_validity = 1;
            }
        });

        $("#name").blur(function(){

            var name = document.forms["registerForm"]["name"].value;
            if (name == null || name == "") {
                document.getElementById("notification_name").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_name").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#family").blur(function(){

            var family = document.forms["registerForm"]["family"].value;
            if (family == null || family == "") {
                document.getElementById("notification_family").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_family").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#fatherName").blur(function(){

            var father = document.forms["registerForm"]["fatherName"].value;
            if (father == null || father == "") {
                document.getElementById("notification_fatherName").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_fatherName").innerHTML = "";
                check_register_validity = 1;
            }
        });


        $("#shenasnameNumber").blur(function(){

            var variable = document.forms["registerForm"]["shenasnameNumber"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_shenasnameNumber").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_shenasnameNumber").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#birthDate").blur(function(){

            var variable = document.forms["registerForm"]["birthDate"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_birthDate").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_birthDate").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#birthLocation").blur(function(){

            var variable = document.forms["registerForm"]["birthLocation"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_birthLocatione").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_birthLocatione").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#shenasnamePlace").blur(function(){

            var variable = document.forms["registerForm"]["shenasnamePlace"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_shenasnamePlace").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_shenasnamePlace").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#religion").blur(function(){

            var variable = document.forms["registerForm"]["religion"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_religion").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_religion").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#birthLocation").blur(function(){

            var variable = document.forms["registerForm"]["birthLocation"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_birthLocation").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_birthLocation").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#marriage").blur(function(){

            var variable = document.forms["registerForm"]["marriage"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_marriage").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_marriage").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#melliCode").blur(function(){

            var variable = document.forms["registerForm"]["melliCode"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_melliCode").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_melliCode").innerHTML = "";
                check_register_validity = 1;
            }
        });


        $("#elmiSituation").blur(function(){

            var variable = document.forms["registerForm"]["elmiSituation"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_elmiSituation").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_elmiSituation").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#teachingGroup").blur(function(){

            var variable = document.forms["registerForm"]["teachingGroup"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_teachingGroup").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_teachingGroup").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#teachingMaqtaa").blur(function(){

            var variable = document.forms["registerForm"]["teachingMaqtaa"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_teachingMaqtaa").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_teachingMaqtaa").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#telHome").blur(function(){

            var variable = document.forms["registerForm"]["telHome"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_telHome").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_telHome").innerHTML = "";
                check_register_validity = 1;
            }
        });

        $("#telWork").blur(function(){
            var variable = document.forms["registerForm"]["telWork"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_telWork").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_telWork").innerHTML = "";
                check_register_validity = 1;
            }
        });
        $("#mobile").blur(function(){
            var variable = document.forms["registerForm"]["mobile"].value;
            if (variable == null || variable == "") {
                document.getElementById("notification_mobile").innerHTML = "این فیلد نباید خالی باشد";
                check_register_validity = 0;
            }
            else
            {
                document.getElementById("notification_mobile").innerHTML = "";
                var number = document.forms["registerForm"]["mobile"].value;
                var i;
                var result = true;
                for(i=0;i<number.length;i++)
                {
                    var j;
                    for(j='a';j<='z';j++)
                    {
                        if(number[i]==j)
                            result = false;
                    }
                    for(j='A';j<='Z';j++)
                    {
                        if(number[i]==j)
                            result = false;
                    }
                }
                if(result == false)
                {
                    document.getElementById("notification_mobile").innerHTML = "شماره موبایل اشتباه میباشد";
                    check_register_validity = 0;
                }
                else
                {
                    document.getElementById("notification_mobile").innerHTML ="";
                    check_register_validity = 1;
                }





                check_register_validity = 1;
            }
        });

    });

    $(document).ready(function(){
        $("#cansel_button").click(function(){

        }
    }

</script>






<!--
        These codes are for registeration.
-->
<div class="borders">
    <form name="registerForm" action="<?php echo base_url(); ?>index.php/register/submited_form/" method="post">
        <p class="font_modeltitr col-lg-2">ثبت نام در سیستم</p><br/>
        <div class="row  middleForm">
            <div class="col-lg-5 col-lg-offset-3">
                <div><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="name" id="name" placeholder="نام"><p class="font_sidetext height col-lg-2">نام</p>
                    <p class= "error_notif col-lg-5" id="notification_name"></p>
                </div>
                <div><p class="font_sidetext height col-lg-4 txt-margin">نام خانوادگی</p><input type="text" class= "col-lg-offset-3 col-lg-7 height font_model txt-right" name="family" id="family" placeholder="نام خانوادگی">
                    <p class= "error_notif col-lg-5" id="notification_family"></p>
                </div>

                <div><input type="text" class= "col-lg-offset-3 col-lg-7 height font_model txt-right" name="fatherName" id="fatherName" placeholder="نام پدر"><p class="font_sidetext height col-lg-2">نام پدر</p>
                    <p class= "error_notif col-lg-5" id="notification_fatherName"></p>
                </div>
                <div><p class="font_sidetext height col-lg-4 txt-margin">شماره شناسنامه</p><input type="text" class= "col-lg-offset-3 col-lg-7 height font_model txt-right" name="shenasnameNumber" id="shenasnameNumber" placeholder="شماره شناسنامه">
                    <p class= "error_notif col-lg-5" id="notification_shenasnameNumber"></p>
                </div>
                <div><input type="text" class= "col-lg-offset-3 col-lg-7 height font_model" name="birthDate" id="birthDate" placeholder="25/3/1356"><p class="txt-right font_sidetext height col-lg-2">تاریخ تولد</p>
                    <p class= "error_notif col-lg-5" id="notification_birthDate"></p>
                </div>
                <div><input type="text" class= "col-lg-offset-3 col-lg-7 height font_model" name="birthLocation" id="birthLocation" placeholder="مکان تولد"><p class="txt-right font_sidetext height col-lg-2">مکان تولد</p>
                    <p class= "error_notif col-lg-5" id="notification_birthLocation"></p>
                </div>
                <div><p class="font_sidetext height col-lg-4 txt-margin">مکان صدور شناسنامه</p><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="shenasnamePlace" id="shenasnamePlace" placeholder="مکان صدور شناسنامه">
                    <p class= "error_notif col-lg-5" id="notification_shenasnamePlace"></p>
                </div>
                <div><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="religion" id="religion" placeholder="مذهب"><p class="font_sidetext height col-lg-2">مذهب</p>
                    <p class= "error_notif col-lg-5" id="notification_religion"></p>
                </div>

                <div>
                    <p class="font_sidetext height col-lg-4 txt-margin">وضعیت ازدواج</p>
                        <label class="font_sidetext txt-right col-lg-offset-3 col-lg-7 height font_model">
                            متاهل
                            <input  id="marriage" type="radio" name="marriage" value="married">
                        </label>
                        <label class="font_sidetext txt-right col-lg-offset-3 col-lg-7 height font_model">
                           مجرد
                            <input  id="marriage" type="radio" name="marriage" value="single">
                        </label>
                    <p class= "error_notif col-lg-5" id="notification_marriage"></p>
                </div>

                <div><p class="font_sidetext height col-lg-10" style="margin-left: 100px;">وضعیت نظام وظیفه- در صورت ذکور بودن پاسخ دهید</p><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="nezamVazifeSituation" placeholder="وضعیت نظام وظیقه"></div>

                <div><p class="font_sidetext height col-lg-4 txt-margin">کد ملی</p><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="melliCode" id="melliCode" placeholder="کد ملی">
                    <p class= "error_notif col-lg-5" id="notification_melliCode"></p>
                </div>
                <div><p class="font_sidetext height col-lg-7" style="margin-left: 175px;" >وضعیت علمی - آخرین وضعیت تحصیلی</p><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="elmiSituation" id="elmiSituation" placeholder="وضعیت علمی">
                    <p class= "error_notif col-lg-5" id="notification_elmiSituation"></p>
                </div>
                <div><p class="font_sidetext height col-lg-4 txt-margin">گروه تدریسی</p><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="teachingGroup" id="teachingGroup" placeholder="گروه تدریسی">
                    <p class= "error_notif col-lg-5" id="notification_teachingGroup"></p>
                </div>
                <div><p class="font_sidetext height col-lg-8" style="margin-left: 175px;">مقطع تحصیلی- که تدریس خواهید کرد</p><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="teachingMaqtaa" id="teachingMaqtaa" placeholder="مقطع تحصیلی">
                    <p class= "error_notif col-lg-5" id="notification_teachingMaqtaa"></p>
                </div>

                <div><p class="font_sidetext height col-lg-4 txt-margin">پست الکترونیک</p><input type="email" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="email" id="email" placeholder="پست الکترونیک">
                    <p class= "error_notif col-lg-5" id="notification_email"></p>
                </div>

                <div><p class="font_sidetext height col-lg-4 txt-margin">آدرس محل کار</p><textarea rows="4" cols="50" type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="workingAdd" id="workingAdd" placeholder="آدرس محل کار"></textarea></div>
                <div><p class="font_sidetext height col-lg-4 txt-margin">آدرس محل زندگی</p><textarea rows="4" cols="50" type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="livingAdd" id="livingAdd" placeholder="آدرس محل زندگی"></textarea></div>

                <div><p class="font_sidetext height col-lg-4 txt-margin">شماره تلفن منزل</p><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="telHome" id="telHome" placeholder="شماره تلفن خانه">
                    <p class= "error_notif col-lg-5" id="notification_telHome"></p>
                </div>

                <div><p class="font_sidetext height col-lg-4 txt-margin">شماره تلفن محل کار</p><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="telWork" id="telWork" placeholder="شماره تلفن محل کار">
                    <p class= "error_notif col-lg-5" id="notification_telWork"></p>
                </div>
                <div><p class="font_sidetext height col-lg-4 txt-margin">تلفن همراه</p><input type="text" class= "txt-right col-lg-offset-3 col-lg-7 height font_model" name="mobile" id="mobile" placeholder="تلفن همراه">
                    <p class= "error_notif col-lg-5" id="notification_mobile"></p>
                </div>

                <button type="submit" id="register_button" class= "col-lg-offset-3 col-lg-3 height bottum font_model margin-register-button">ثبت نام</button>
                <button type="button" id="cansel_button" class= "col-lg-3 height bottum font_model margin-cancel-button">انصراف</button>
            </div>
        </div>
    </form>
</div>