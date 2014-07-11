<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/23/14
 * Time: 4:34 PM
 */?>

    <script>
        var weekDays = {
            1 : "شنبه",
            2 : "یکشنبه",
            3 : "دوشتبه",
            4 : "سه شنبه",
            5 : "چهارشنبه",
            6 : "پنجشنبه"
        };
        function deleteRow(clicked_id)
        {
            rowId = "#row"+clicked_id.toString().substr(3);
            request = $.ajax({
                url:"<?php echo base_url(); ?>index.php/main/deleteTime",
                type:"POST",
                data:{"id":clicked_id.toString().substr(3)},
                success:function(result){
                    if(result == "yes")
                    {
                        $(rowId).fadeOut();
                    }
                    else
                    {
                        $(rowId).notify("در حذف ساعت مورد نظر مشکلی به وجود آمده است، لطفا مجددا امتحان کنید و یا در صورت تکرار با پشتیبانی تماس بگیرید",{
                            position: "top right",
                            className: "error"
                        });
                    }
                },
                beforeSend:function()
                {
                },
                error: function(xhr, status, error) {
                    $(rowId).notify("در حذف ساعت مورد نظر مشکلی به وجود آمده است، لطفا مجددا امتحان کنید و یا در صورت تکرار با پشتیبانی تماس بگیرید",{
                       position: "top right",
                        className: "error"
                    });
                }
            });
            return false;
        }

        $(document).ready(function(){
            var weekDays = {
                1 : "شنبه",
                2 : "یکشنبه",
                3 : "دوشتبه",
                4 : "سه شنبه",
                5 : "چهارشنبه",
                6 : "پنجشنبه"
            };/*
            $(".delete").click(function(){
               alert($(this).attr('id'));
            });*/
            $("#saveTime").click(function(){
                var weekDay = $("#weekDay").val();
                var startTime = $("#startTime").val();
                var endTime = $("#endTime").val();
                if(startTime == "")
                {
                    $("#startTime").notify("لطفا زمان شروع را کامل وارد نمایید",
                        {
                            position: "top center",
                            className: "warn"
                        });
                    return false;
                }
                if(endTime == "")
                {
                    $("#endTime").notify("لطفا زمان پایان را کامل وارد نمایید",
                        {
                            position: "top center",
                            className: "warn"
                        });
                    return false;
                }
                if(startTime >= endTime)
                {
                    $("#inputTime").notify("نباید زمان شروع از پایان بیشتر باشد",{
                        position: "top right",
                        className: "error"
                    });
                    return false;
                }
                request = $.ajax({
                    url:"<?php echo base_url(); ?>index.php/main/addTime",
                    type:"POST",
                    data:{"weekDay":weekDay, "startTime":startTime, 'endTime':endTime},
                    success:function(result){
                        console.log(result);
                        if(result.substr(0,3) == "yes")
                        {
                            $("#inputTime").notify("زمان جدید با موفقیت به جدول زمان های اعلام شده افزوده شد",{
                                position: "top right",
                                className: "success"
                            });
                            var newRow = "<tr id='row"+result.substr(3)+"'><td>"+weekDays[weekDay]+"</td><td>"+startTime+":00</td><td>"+endTime+":00</td><td><img src='<?php echo base_url();?>img/delete.png' id='img"+result.substr(3)+"' class='delete' onclick='deleteRow(this.id)'/></td></tr>";
                            console.log(newRow);
                            $("#timeTable").append(newRow);

                        }
                        else if(result == "conflict")
                        {
                            $("#inputTime").notify("ساعت انتخاب شده با یکی دیگر از ساعت های انتخاب شده تداخل دارد",{
                                position: "top right",
                                className: "error"
                            });
                        }
                        else{
                            $("#inputTime").notify("متاسفانه امکان افزودن این ساعت وجود ندارد، لطفا با پشتیبانی تماس بگیرید",{
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
                <li  class="<?php echo $isInsertDateMode?'active':'' ?>"><a href="<?php echo base_url();?>/index.php/main" class="font_sidetext">انتخاب درس و روز</a></li>
                <li  class="<?php echo $isProfileMode?'active':'' ?>"><a href="<?php echo base_url();?>/index.php/profile" class="font_sidetext">اطلاعات شخص</a></li>
            </ul>
        </div>
    </div>
    <div class="row borders tabed-border">
        <div class="container">
            <div class="row loginForm">
                <p class="col-xs-12 contentHeader">ورود اطلاعات امکان تدریس</p>
            </div>
            <div class="col-xs-8 col-xs-push-4">
                <div class="timeToTeach">
                    <div class="row loginForm" id="inputTime">
                        <div class="row loginForm">
                            <p class="col-xs-12 contentHeader2">ثبت اطلاعات ساعت حضور</p>
                        </div>
                        <form name="login_form form-inline" role="form">
                            <div class="row">
                                <div class="form-group" style="margin-left: 20px">
                                    <label class="col-xs-2 col-xs-push-10 control-label font-model-titr" for="weekDay">روز هفته</label>
                                    <select class="form-control2 col-xs-2 col-xs-push-6 rtlText font-model" id="weekDay">
                                        <option value="1">شنبه</option>
                                        <option value="2">یکشنبه</option>
                                        <option value="3">دوشنبه</option>
                                        <option value="4">سه شنبه</option>
                                        <option value="5">چهارشنبه</option>
                                        <option value="6">پنجشتبه</option>
                                    </select>
                                    <label class="col-xs-2 col-xs-push-2 control-label font-model-titr" for="startTime">از ساعت</label>
                                    <input class="form-control2 col-xs-2 col-xs-pull-2 rtlText font-model" type="time" id="startTime">
                                    <label class="col-xs-2 col-xs-pull-6 control-label font-model-titr" for="endTime">تا ساعت</label>
                                    <input class="form-control2 col-xs-2 col-xs-pull-10 rtlText font-model" type="time" id="endTime">
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn-primary col-xs-2 col-xs-offset-5 font-model" id="saveTime">ثبت ساعت</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="timesEntered">
                    <div class="row loginForm">
                        <div class="row loginForm">
                            <p class="col-xs-12 contentHeader2">ساعت های اعلام شده</p>
                        </div>
                        <table class="table table-stripped table-hover table-responsive" id="timeTable">
                            <tr>
                                <th>روز هفته</th>
                                <th>ساعت شروع</th>
                                <th>ساعت پایان</th>
                                <th>حذف ساعت</th>
                            </tr>
                            <?php
                                $week_days = array(
                                    1 => "شنبه",
                                    2 => "یکشنبه",
                                    3 => "دوشتبه",
                                    4 => "سه شنبه",
                                    5 => "چهارشنبه",
                                    6 => "پنجشنبه"
                                );
                                foreach($times as $time)
                                {
                                    echo "<tr id='row".$time["id"]."'>";
                                    echo "<td>".$week_days[$time["day_of_week"]]."</td>";
                                    echo "<td>".$time["start_time"]."</td>";
                                    echo "<td>".$time["end_time"]."</td>";
                                    echo "<td>".'<img src="'.base_url().'img/delete.png" id="img'.$time["id"].'" class="delete" onclick="deleteRow(this.id)"/>'."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-xs-pull-8">
                <div class="courseToTeach">
                    <div class="row loginForm" id="inputCourse">
                        <div class="row loginForm">
                            <p class="col-xs-12 contentHeader2">ثبت اطلاعات دروس مورد نظر جهت تدریس</p>
                        </div>
                        <form name="login_form form-inline" role="form">
                            <div class="row">
                                <div class="form-group" style="margin-left: 20px">
                                    <label class="col-xs-5 col-xs-push-7 control-label font-model-titr" for="course">درس مورد نظر</label>
                                    <select class="form-control2 col-xs-7 col-xs-pull-5 rtlText font-model" id="course">
                                        <?php
                                            foreach($courses as $course)
                                                echo "<option value='".$course["course_code"]."'>".$course["course_name"]."</option>";
                                        ?>
                                        <!--
                                        <option value="1">شنبه</option>
                                        <option value="2">یکشنبه</option>
                                        <option value="3">دوشنبه</option>
                                        <option value="4">سه شنبه</option>
                                        <option value="5">چهارشنبه</option>
                                        <option value="6">پنجشتبه</option>-->
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn-primary col-xs-6 col-xs-offset-3 font-model" id="saveTime">ثبت درس</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="courseEntered">
                    <div class="row loginForm">
                        <div class="row loginForm">
                            <p class="col-xs-12 contentHeader2">درس های اعلام شده</p>
                        </div>
                        <table class="table table-stripped table-hover table-responsive" id="timeTable">
                            <tr>
                                <th>درس</th>
                                <th>حذف درس</th>
                            </tr>
                            <?php
                            foreach($userCourses as $cu)
                            {
                                echo "<tr id='row".$cu["course_code"]."'>";
                                echo "<td>".$cu["course_name"]."</td>";
                                echo "<td>".'<img src="'.base_url().'img/delete.png" id="img'.$cu["course_code"].'" class="delete" onclick="deleteRow(this.id)"/>'."</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>