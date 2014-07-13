<?php
/**
 * Created by PhpStorm.
 * User: Najmeh
 * Date: 6/27/14
 * Time: 5:42 PM
 */ ?>

    <script>
        $(document).ready(function(){
            $("#searchNow").click(function()
            {
                var course = $("#course").val();
                var startTime = $("#startTime").val();//==""?"nil":$("#startTime").val();
                var endTime = $("#endTime").val();//==""?"nil":$("#endTime").val();
                var weekDay = $("#weekDay").val();
                salam = {"course":course,"startTime":startTime,"endTime":endTime,"weekDay":weekDay};
                request = $.ajax({
                    url:"<?php echo base_url(); ?>index.php/admin_search/search",
                    type:"GET",
                    data:salam,
                    success:function(result){
                        console.log(result);
                        $("#searchResults").html('<div class="row loginForm"><div class="row loginForm"><p class="col-xs-12 contentHeader2">نتیجه جستجو</p></div></div>');
                        $("#searchResults").append(result);
                    },
                    beforeSend:function()
                    {
                    },
                    error: function(xhr, status, error) {
                        $("#searchBorder").notify("متاسفانه در حال حاظر، امکان این جستجو وجود ندارد.",{
                            position: "top right",
                            className: "error"
                        });
                    }
                });
                return false;
            });
        });

    </script>

    <div class="row">
        <div class="col-xs-10 col-xs-push-2 rtlText headerWelcome">
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
        <div class="col-xs-2 col-xs-pull-10">
            <a href="<?php echo base_url();?>index.php/login/logOut/"><button class="btn btn-danger">خروج از حساب کاربری</button></a>
        </div>

    </div>
    <div class="row">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li  <?php echo $isAdmin_main?'class="active"':"" ?>><a href="<?php echo base_url();?>index.php/admin_main" class="font_sidetext">تایید ثبت نام کنندگان</a></li>
                <li  <?php echo $isAdmin_search?'class="active"':"" ?>><a href="<?php echo base_url();?>index.php/admin_search" class="font_sidetext">جستجو بین ثبت نام کنندگان</a></li>
            </ul>
        </div>
    </div>
    <div class="row borders tabed-border" id="searchBorder">
        <div class="container">
            <div class="row loginForm">
                <p class="col-xs-12 contentHeader">جستجوی بین ثبت نام کنندگان</p>
            </div>
            <div class="row loginForm">
                <p class="col-xs-12 contentHeader2">تنها فیلدهایی که برای جستجو مد نظر است را وارد نمایید</p>
            </div>
            <form name="login_form form-inline" role="form">
                <div class="row">
                    <div class="form-group" style="margin-left: 20px">
                        <label class="col-xs-1 col-xs-push-11 control-label font-model-titr" for="course">درس</label>
                        <select class="form-control2 col-xs-2 col-xs-push-8 rtlText font-model" id="course">
                            <option value="bad">انتخاب نشده</option>
                            <?php
                            foreach($courses as $course)
                                echo "<option value='".$course["course_name"]."'>".$course["course_name"]."</option>";
                            ?>
                        </select>
                        <label class="col-xs-1 col-xs-push-5 control-label font-model-titr" for="weekDay">روز هفته</label>
                        <select class="form-control2 col-xs-2 col-xs-push-2 rtlText font-model" id="weekDay">
                            <option value="0">انتخاب نشده</option>
                            <option value="1">شنبه</option>
                            <option value="2">یکشنبه</option>
                            <option value="3">دوشنبه</option>
                            <option value="4">سه شنبه</option>
                            <option value="5">چهارشنبه</option>
                            <option value="6">پنجشتبه</option>
                        </select>
                        <label class="col-xs-1 col-xs-pull-1 control-label font-model-titr" for="startTime">از ساعت</label>
                        <input class="form-control2 col-xs-2 col-xs-pull-4 rtlText font-model" type="time" id="startTime">
                        <label class="col-xs-1 col-xs-pull-7 control-label font-model-titr" for="endTime">تا ساعت</label>
                        <input class="form-control2 col-xs-2 col-xs-pull-10 rtlText font-model" type="time" id="endTime">
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-margin btn-primary col-xs-2 col-xs-offset-5 font-model" id="searchNow">جستجو</button>
                </div>
            </form>
            <div class="searchResults" id="searchResults">
                <div class="row loginForm">
                    <div class="row loginForm">
                        <p class="col-xs-12 contentHeader2">نتیجه جستجو</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>