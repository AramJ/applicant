<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/23/14
 * Time: 4:34 PM
 */ ?>

</div>

<div class="">
    <div class="row">
        <div>
         <span>
            <ul class="nav nav-tabs col-lg-offset-1 col-lg-push-6 col-lg-3">
                <li  <?php echo $isDays?'class="active"':"" ?>><a href="<?php echo base_url();?>/index.php/main" class="font_sidetext">انتخاب درس و روز</a></li>
                <li  <?php echo $isProfile?'class="active"':"" ?>><a href="<?php echo base_url();?>/index.php/profile" class="font_sidetext">اطلاعات شخص</a></li>
            </ul>
         </span>
        </div>
    </div>

    <div class="borders" <div class="borders"
        style="
            height: 600px;
        ">


        <form method="post" action="<?php base_url(); ?>/index.php/main/add-day">
            <div class="row samt">
                <div class="dropdown font_dropdown place_dropdown dropdown-toggle">

                    <input list="days" name="day">
                    <datalist id="days">
                        <option value="Saturday">
                        <option value="Monday">
                        <option value="Tuesday">
                        <option value="Wednesday">
                        <option value="Thursday">
                        <option value="Friday">
                    </datalist>
                </div>
            </div>

            <div class="row samt">
                <button class=" btn btn-default font_dropdown place_button" type="submit">انتخاب</button>
            </div>
            <div class="row samt">
                <button class=" btn btn-default font_dropdown place_button_dlt" type="submit">حذف</button>
            </div>
        </form>

        <div class="row samt">

            <div class="place_dropdown2 font_dropdown">
                <input name="course" type="text" style="text-align: right;"  placeholder="نام درس" >
            </div>

        </div>
        <div class="row samt">
            <button class=" btn btn-default font_dropdown place_button2" type="submit">انتخاب</button>
        </div>
        <div class="row samt">
            <button class=" btn btn-default font_dropdown place_button_dlt2" type="submit">حذف</button>
        </div>

        <div>
            <table class="col-lg-6 table table-striped table-bordered place_table1" cellspacing="0" width="30%">
                <thead>
                <tr>
                    <th style="text-align: right;">روز هفته</th>
                    <th style="text-align: right;">شماره</th>
                </tr>
                </thead>
            </table>
        </div>
        <div>
            <table class="col-lg-6 table table-striped table-bordered place_table2" cellspacing="0" width="30%">
                <thead>
                <tr>
                    <th style="text-align: right;">درس ها</th>
                    <th style="text-align: right;">شماره</th>
                </tr>
                </thead>
            </table>
        </div>

    </div>



</div>
</body>