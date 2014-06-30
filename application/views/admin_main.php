<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/27/14
 * Time: 5:42 PM
 */ ?>
</div>
<div class="">
    <div class="row">
        <div>
         <span>
            <ul class="nav nav-tabs col-lg-offset-1 col-lg-push-6 col-lg-3">
                <li  <?php echo $isAdmin_main?'class="active"':"" ?>><a href="<?php echo base_url();?>index.php/admin_main" class="font_sidetext">تایید ثبت نام کنندگان</a></li>
                <li  <?php echo $isAdmin_search?'class="active"':"" ?>><a href="<?php echo base_url();?>index.php/admin_search" class="font_sidetext">جستجو بین ثبت نام کنندگان</a></li>
            </ul>
         </span>
        </div>
    </div>

    <div class="borders">
        <p style="margin-right: 10px" class="font_modeltitr">اطلاعات شخص</p>
        <div class="row">
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
                <tbody>
                <?php /*
                include 'database.php';
                $pdo = Database::connect();
                $sql = 'SELECT * FROM customers ORDER BY id DESC';
                foreach ($pdo->query($sql) as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['name'] . '</td>';
                    echo '<td>'. $row['email'] . '</td>';
                    echo '<td>'. $row['mobile'] . '</td>';
                    echo '</tr>';
                }
                Database::disconnect();
                */?>
                </tbody>
            </table>
        </div>
    </div>
</div>