<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/27/14
 * Time: 5:42 PM
 */ ?>

    <script>
         function acceptUser(clicked_id)
         {
             $.confirm({
                 title:"تایید کاربر",
                 text:"آیا میخواهید کاربر مورد نظر را تایید نمایید",
                 confirm: function(button) {
                     rowId = "#"+clicked_id.toString().substr(3);
                     request = $.ajax({
                         url:"<?php echo base_url(); ?>index.php/admin_main/acceptUser",
                         type:"POST",
                         data:{"melli_code":clicked_id.toString().substr(3)},
                         success:function(result){
                             console.log(result);
                             if(result == "yes")
                             {
                                 $(rowId).fadeOut("slow",function(){
                                    $(rowId).remove();
                                 });
                             }
                             else
                             {
                                 $(rowId).notify("متاسفانه در حال حاظر امکان تایید این کاربر وجود ندارد، لطفا مجددا تلاش کنید و در صورت تکرار با پشتیبانی تماس بگیرید",{
                                     position: "top right",
                                     className: "error"
                                 });
                             }
                         },
                         beforeSend:function()
                         {
                         },
                         error: function(xhr, status, error) {
                             $(rowId).notify("متاسفانه در حال حاظر امکان تایید این کاربر وجود ندارد، لطفا مجددا تلاش کنید و در صورت تکرار با پشتیبانی تماس بگیرید",{
                                 position: "top right",
                                 className: "error"
                             });
                         }
                     });
                     return false;
                 },
                 cancel: function(button) {
                 },
                 confirmButton: "بله",
                 cancelButton: "خیر"
             });
         }

         function rejectUser(clicked_id)
         {
             $.confirm({
                 title:"تایید کاربر",
                 text:"آیا میخواهید کاربر مورد نظر را حذف نمایید"+"<br/>"+"در صورتی که تایید نمایید اطلاعات کاربر برای همیشه از بین میرود و عملیات غیر قابل بازگشت است",
                 confirm: function(button) {
                     rowId = "#"+clicked_id.toString().substr(3);
                     request = $.ajax({
                         url:"<?php echo base_url(); ?>index.php/admin_main/deleteUser",
                         type:"POST",
                         data:{"melli_code":clicked_id.toString().substr(3)},
                         success:function(result){
                             console.log(result);
                             if(result == "yes")
                             {
                                 $(rowId).fadeOut("slow",function(){
                                     $(rowId).remove();
                                 });
                             }
                             else
                             {
                                 $(rowId).notify("متاسفانه در حال حاظر امکان تایید این کاربر وجود ندارد، لطفا مجددا تلاش کنید و در صورت تکرار با پشتیبانی تماس بگیرید",{
                                     position: "top right",
                                     className: "error"
                                 });
                             }
                         },
                         beforeSend:function()
                         {
                         },
                         error: function(xhr, status, error) {
                             $(rowId).notify("متاسفانه در حال حاظر امکان تایید این کاربر وجود ندارد، لطفا مجددا تلاش کنید و در صورت تکرار با پشتیبانی تماس بگیرید",{
                                 position: "top right",
                                 className: "error"
                             });
                         }
                     });
                     return false;
                 },
                 cancel: function(button) {
                 },
                 confirmButton: "بله",
                 cancelButton: "خیر"
             });
         }
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
			</div>
			<div class="row loginForm">
                <?php
                foreach($users as $user)
                {
                    if($user['is_approved'] == 0)
                    {
?>
                    <div class="userInfoToAccept" id="<?php echo $user['melli_code']?>">
                        <div class="row loginForm">
                            <div class="row loginForm">
                                <p class="col-xs-12 contentHeader2"><?php echo $user['name']." ".$user['family'];?></p>
                            </div>
							<div class="row">
								<div class="col-xs-4 col-xs-push-8 userInfoText">
									نام پدر:<?php echo $user['father_name']; ?>
								</div>
								<div class="col-xs-4 userInfoText">
									شماره شناسنامه:<?php echo $user['shenasname_number'];?>
								</div>
								<div class="col-xs-4 col-xs-pull-8 userInfoText">
									تاریخ تولد:<?php echo $user['birth_date']; ?>
								</div>
							</div>	
							<div class="row">
								<div class="col-xs-4 col-xs-push-8 userInfoText">
									محل تولد:<?php echo $user['birth_location'];?>
								</div>
								<div class="col-xs-4 userInfoText">
									محل صدور شناسنامه:<?php echo $user['shenasname_place'];?>
								</div>
								<div class="col-xs-4 col-xs-pull-8 userInfoText">
									وضعیت تاهل:<?php echo $user['marriage_situation'] == 0?'مجرد':'متاهل';?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-xs-push-8 userInfoText">
									وضعیت نظام وظیفه:<?php if($user['nezam_vazife_situation'] == NULL) echo "سربازی ندارند"; else echo $user['nezam_vazife_situation'];?>
								</div>
								<div class="col-xs-4 userInfoText">
									کد ملی:<?php echo $user['melli_code'];?>
								</div>
								<div class="col-xs-4 col-xs-pull-8 userInfoText">
									وضعیت علمی:<?php echo $user['elmi_situation'];?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-xs-push-8 userInfoText">
									تلفن منزل:<?php echo $user['tel_home'];?>
								</div>
								<div class="col-xs-4 userInfoText">
									پست الکترونیکی:<?php echo $user['email'];?>
								</div>
								<div class="col-xs-4 col-xs-pull-8 userInfoText">
									تلفن محل کار:<?php echo $user['tel_work'];?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-xs-push-8 userInfoText">
									تلفن همراه:<?php echo $user['mobile'];?>
								</div>
								<div class="col-xs-4 userInfoText">
									مقطع آموزشی:<?php echo $user['teaching_maqtaa'];?>
								</div>
								<div class="col-xs-4 col-xs-pull-8 userInfoText">
									مذهب:<?php echo $user['religion'];?>
								</div>
							</div>
                            <div class="row">
                                <div class="col-xs-10 col-xs-push-2">
                                    <div class="row">
                                        <div class="col-xs-12 userInfoAddress">
                                            آدرس محل کار:<?php echo $user['work_address']?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 userInfoAddress">
                                            آدرس منزل:<?php echo $user['home_address']?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-xs-pull-10">
                                    <button id="bok<?php echo $user['melli_code'];?>" class="btn btn-success" onclick="acceptUser(this.id)" style="margin-top: 2px; margin-bottom: 1px;">تایید حساب کاربری</button>
                                    <button id="bcn<?php echo $user['melli_code'];?>" class="btn btn-danger" onclick="rejectUser(this.id)" style="margin-top: 1px; margin-bottom: 2px;">حذف حساب کاربری</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>