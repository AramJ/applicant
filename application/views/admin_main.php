<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/27/14
 * Time: 5:42 PM
 */ ?>

    <script>
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
    <div class="row borders tabed-border">
        <div class="container">
            <div class="row loginForm">
                <p class="col-xs-12 contentHeader">تایید ثبت نام کنندگان</p>
                <div class="timesEntered">
                    <div class="row loginForm">
                        <div class="row loginForm">
                            <p class="col-xs-12 contentHeader2"><?php echo "";?></p>
                        </div>
                        <table class="table table-striped table-bordered user_acpt">
                            <thead>
                            <tr>
                                <th style="text-align: right;">نام و نام خانوادگی</th>
                                <th style="text-align: right;">نام پدر</th>
                                <th style="text-align: right;">شماره شناسنامه</th>
                                <th style="text-align: right;">تاریخ تولد</th>
                                <th style="text-align: right;">مکان تولد</th>
                                <th style="text-align: right;">محل صدور شناسنامه</th>
                                <th style="text-align: right;">مذهب</th>
                                <th style="text-align: right;">وضعیت تاهل</th>
                                <th style="text-align: right;">وضعیت نظام وظیفه</th>
                                <th style="text-align: right;">وضعیت علمی</th>
                                <th style="text-align: right;">گروه آموزشی</th>
                                <th style="text-align: right;">شماره تماس منزل</th>
                                <th style="text-align: right;">شماره تماس محل کار</th>
                                <th style="text-align: right;">تلفن همراه</th>
                                <th style="text-align: right;">آدرس منزل</th>
                                <th style="text-align: right;">آدرس محل کار</th>
                                <th style="text-align: right;">پست الکترونیک</th>
                                <th style="text-align: right;">مقطع تدریس</th>

                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>