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

    <div class="borders">
        <div class="row samt">

            <div class="dropdown">
                <button class="font_dropdown btn btn-default dropdown-toggle place_dropdown" type="button" id="dropdownMenu1" data-toggle="dropdown">
                    روزها
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu " role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
            </div>

        </div>
        <div class="row samt">
            <button class=" btn btn-default font_dropdown place_button" type="submit">انتخاب</button>
        </div>
        <div class="row samt">
            <button class=" btn btn-default font_dropdown place_button_dlt" type="submit">حذف</button>
        </div>

        <div class="row samt">

            <div class="dropdown place_dropdown2">
                <button class="font_dropdown btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                    درس ها
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu " role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
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