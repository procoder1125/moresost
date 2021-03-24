<?php
 use common\models\UserProfile;
 use yii\helpers\Url;
use yii\widgets\ActiveForm;

?> 


<header class="main">
<div class="my-container">
<div class="row m-0 justify-content-center justify-content-lg-between align-items-center">
    <div class="logo p-sm-3">
        <a href="/uz">
            <img alt="High training center" src="/themes/default/img/logotop2.png">
        </a>
    </div>
   
    </div>
</div>
</header>
            <section class="breadcrumbs-box aqua-gradient p-5" style="">
        <div class="my-container">
            <h1 class="text-header text-white"><?=Yii::t("app", "Cabinet")?></h1>
            <ol class="breadcrumb bg-transparent p-0 crump">
                <li class="breadcrumb-item" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="/site" itemprop="url">
                        <span itemprop="title"><?=Yii::t("app", 'Home')?> </span>
                    </a>
                </li>
                <li class="breadcrumb-item" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="<?=Yii::$app->request->referrer?>" itemprop="url">
                        <span itemprop="title"><?=UserProfile::findOne(['user_id' => Yii::$app->user->id])->full?> </span>
                    </a>
                </li>
                <li class="breadcrumb-item active" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <span itemprop="title"> <?=Yii::t("app", "User Profile")?> </span>
                </li>
            </ol>
        </div>
    </section>
<div class="bg-gray pb-5">
    <div class="container ">
        <!-- <div class="fixer"></div> -->
        <div class="row d-flex justify-content-center">
            

            <div class="login-content mt-5 mb-0 col-12 col-md-6">
                <h2 class="text-header mt-0 mb-5 text-center"><?=Yii::t("app", "Change your profile")?></h2>
                <form id="official-signup" class="md-form" action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_csrf" value="Y1JxMFdkLVowOzhRGTdMECIoEnoiKkYpDAMaWDo.ADIpIiBdGBFlbg==">                
               
                <div class="form-group field-materialFormFirstName has-success">
                
               <?php $form = ActiveForm::begin([
               'class' => "md-form",         
            ])?>

             
                <?=$form->field($model, 'first',[
                    
                    'template'=>'
                    <div class="md-form">
                    <i class="fa fa-user prefix grey-text active"></i>
                    {input}
                    <label for="materialFormFirstName">Name</label>
                    <p class="help-block help-block-error"></p>
                    </div>'
                ])->textInput()?>
                   
                <?=$form->field($model, 'last',[
                    
                    'template'=>'
                    <div class="md-form">
                    <i class="fa fa-user prefix grey-text active"></i>
                    {input}
                    <label for="materialFormFirstName">Last name</label>
                    <p class="help-block help-block-error"></p>
                    </div>'
                ])->textInput()?>

            <?php ActiveForm::end();?>

            <?php $form = ActiveForm::begin([
               'class' => "md-form",  
               'action' => ''       
            ])?>

             
                <?=$form->field($model, 'first',[
                    
                    'template'=>'
                    <div class="md-form">
                    <i class="fa fa-user prefix grey-text active"></i>
                    {input}
                    <label for="materialFormFirstName">Name</label>
                    <p class="help-block help-block-error"></p>
                    </div>'
                ])->textInput()?>
                   
                <?=$form->field($model, 'last',[
                    
                    'template'=>'
                    <div class="md-form">
                    <i class="fa fa-user prefix grey-text active"></i>
                    {input}
                    <label for="materialFormFirstName">Last name</label>
                    <p class="help-block help-block-error"></p>
                    </div>'
                ])->textInput()?>

            <?php ActiveForm::end();?>


                
                
                
                <div class="form-group field-materialFormLastName has-success">

                        <div class="md-form">
                        <i class="fa fa-user prefix grey-text active"></i>
                            <input type="text" id="materialFormLastName" class="form-control" name="User[last]" value="Ne'matjonov" aria-invalid="false">
                            <label class="text-capitalize2 active" for="materialFormLastName"><?=Yii::t("app", "Surname")?></label>
                            <p class="help-block help-block-error"></p>
                        </div>
                    
               </div>    
                <div class="form-group field-materialFormUsername required has-success">

                        <div class="md-form">
                        <i class="fa fa-user prefix grey-text active"></i>
                            <input type="text" id="materialFormUsername" class="form-control" name="User[username]" value="@pro_developer" aria-required="true" aria-invalid="false">
                            <label class="text-capitalize2 active" for="materialFormUsername"><?=Yii::t("app", "Login")?></label>
                            <p class="help-block help-block-error"></p>
                        </div>
                    
</div>                
                 <div class="form-group field-materialFormEmail required has-success">

                        <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text active"></i>
                            <input type="text" id="materialFormEmail" class="form-control" name="User[email]" value="kamol_ikramov@mail.ru" aria-required="true" aria-invalid="false">
                            <label class="text-capitalize2 active" for="materialFormEmail"><?=Yii::t("app", "Your email")?></label>
                            <p class="help-block help-block-error"></p>
                        </div>
                    
</div>
                <div class="form-group field-user-phone has-success">

                        <div class="md-form form-group">
                        <i class="fa fa-phone prefix grey-text active"></i>
                            <input type="text" id="user-phone" name="User[phone]" value="<?=UserProfile::findOne(['user_id' => Yii::$app->user->id])->phone?>" placeholder="Telefon raqam" data-plugin-inputmask="inputmask_8806250c" aria-invalid="false">
                            
                            <p class="help-block help-block-error"></p>
                        </div>
                    
</div>    
                 <div class="form-group field-materialFormFile">

                    <div class="file-field big-2">
                        <div class="btn btn-rounded peach-gradient btn-sm float-left waves-effect waves-light">
                            <span><?=Yii::t("app", "choose your foto")?></span>
                            <input type="hidden" name="User[file]" value=""><input type="file" id="materialFormFile" class="form-control file-input" name="User[file]">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate file-label" readonly="" type="text" placeholder="<?=Yii::t("app", "Get your foto")?>">

                        </div>
                    </div>
                    <p class="help-block help-block-error"></p>
                    
</div>    
    <div class="form-group field-user-password has-success">

                    <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <label class="text-capitalize2" for="user-password"><?=Yii::t("app", "Password")?> (<?=Yii::t("app", "If you want to change your password")?>)</label>
                    <input type="password" id="user-password" class="form-control validate" name="User[password]" aria-invalid="false">
                    <p class="help-block help-block-error"></p>
                  </div>
</div>    
                <div class="form-group field-user-confirm_password has-success">

                    <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <label class="text-capitalize2" for="user-confirm_password"><?=Yii::t("app", "Confirm password")?> (<?=Yii::t("app", "If you change your last password")?>)</label>
                    <input type="password" id="user-confirm_password" class="form-control" name="User[confirm_password]" aria-invalid="false">
                    <p class="help-block help-block-error"></p>
                  </div>
</div>    
                <div class="text-center">
                <button type="submit" class="btn btn-warning waves-effect waves-light"><?=Yii::t("app", "Save")?></button>                </div>
                </form>    
            </div>
        </div>
    </div>
</div>

    </div>

    <!--Footer-->
<footer class="page-footer font-small pt-4">

    



</footer>
<!--/.Footer-->
    
<div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav" style="transform: translateX(-100%);">
    <ul class="custom-scrollbar list-unstyled ps ps--theme_default" style="max-height:100vh;" data-ps-id="8eec767d-18cc-8864-fa77-e7d9c7165c2b">
        <!-- Logo -->
        <li>
            <div class="logo-wrapper waves-light waves-effect waves-light">
                <a href="/uz"><img src="/themes/default/img/small-semi-final-white.png" class="img-fluid flex-center" style="padding-left: 15px; padding-right:15px; padding-top: 15%"></a>
            </div>
        </li>
        <li>
            <ul class="social">
                <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                <li><a href="#" class="icons-sm pin-ic"><i class="fa fa-telegram"> </i></a></li>
                <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-instagram"> </i></a></li>
                <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
            </ul>
        </li>
        <li>
            <ul class="collapsible collapsible-accordion">
                                <li>
                    <a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Kurslar<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a class="dropdown-item waves-effect" href="/uz/course">Hamma kurslar</a>
                            </li>
                                                                                                <li>
                                        <a class="dropdown-item waves-effect" href="/uz/subject/toshkentda-framework-kurslari/9">Framework'lar</a>
                                    </li>
                                                                    <li>
                                        <a class="dropdown-item waves-effect" href="/uz/subject/web-design-kursy-v-tashkente/10">Web dizayn</a>
                                    </li>
                                                                    <li>
                                        <a class="dropdown-item waves-effect" href="/uz/subject/languages/11">Dasturlash tillari</a>
                                    </li>
                                                                    <li>
                                        <a class="dropdown-item waves-effect" href="/uz/subject/frontend/13">Frontend</a>
                                    </li>
                                                                    <li>
                                        <a class="dropdown-item waves-effect" href="/uz/subject/backend/14">Backend</a>
                                    </li>
                                                                    <li>
                                        <a class="dropdown-item waves-effect" href="/uz/subject/mobile/15">Mobil dasturlash</a>
                                    </li>
                                                                                    </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header waves-effect" href="/uz/teacher"><i class="fa fa-users"></i> Trenerlar</a>
                </li>
                                <li>
                    <a class="collapsible-header waves-effect arrow-r"><i class="fa fa-book"></i> Maqolalar<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a class="dropdown-item waves-effect" href="/uz/blog">Hamma maqolalar</a>
                            </li>
                                                                                                <li>
                                        <a class="dropdown-item waves-effect" href="/uz/blog/dasturlashni-boshlovchilar-uchun/16">Boshlovchilar uchun</a>
                                    </li>
                                                                    <li>
                                        <a class="dropdown-item waves-effect" href="/uz/blog/web-dasturlashdan-maqolalar/18">Web dasturlash</a>
                                    </li>
                                                                    <li>
                                        <a class="dropdown-item waves-effect" href="/uz/blog/mobil-ilovalar-haqida-maqola/19">Mobil dasturlash</a>
                                    </li>
                                                                                    </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header waves-effect arrow-r"><i class="fa fa-building"></i> O'quv markaz<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a class="dropdown-item waves-effect" href="/uz/about-us">Biz haqimizda</a>
                            </li>
                            <li>
                                <a class="dropdown-item waves-effect" href="/uz/contact">Aloqa</a>
                            </li>
                        </ul>
                    </div>
                </li>
                                     
                    <li>
                        <a href="/uz/student/index" class="collapsible-header waves-effect"><i class="fa fa-sign-in"></i> Mening kabinetim</a>
                    </li>
                    <li>
                        <a data-method="POST" href="/uz/site/logout" class="collapsible-header waves-effect"><i class="fa fa-sign-out"></i> Chiqish (@pro_developer)</a>
                    </li>
                                <!-- <li>
                    <a class="collapsible-header waves-effect" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i> Kirish</i></a>
                </li>
                <li>
                    <a class="collapsible-header waves-effect" data-toggle="modal" data-target="#registerModal"><i class="fa fa-pencil"></i> Ro'yxatdan o'tish</i></a>
                </li> -->
            </ul>
        </li>
        <!--/. Side navigation links -->
    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
    <div class="sidenav-bg mask-strong"></div>
</div>


<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-end">
                <button type="button" class="close btn-warning btn pt-2 pb-2 pl-3 pr-3 m-0 waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row align-items-center m-0">
                        <div class="col-10">
                            <div class="md-form">
                                <input type="text" class="form-control mb-2" id="search">
                                <label for="search">Qidiruv</label>
                            </div>
                        </div>

                        <div class="col-2">
                            <button type="submit" class="btn w-100 p-3 text-center bg-orange mb-0 waves-effect waves-light">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="requestModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Kursga yozilish</h5>
                <button type="button" class="close btn-warning btn pt-2 pb-2 pl-3 pr-3 m-0 waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Material form login -->
                <form id="request-form" data-url="/uz/request-send" data-success="So'rovingiz qabul qilindi. Tez orada siz bilan bog'lanamiz." data-full-error="Ismingizni kiriting" data-phone-error="Telefon raqamingizni kiriting" data-phone-number-error="Telefon raqam xato kiritilgan. Misol: +998901234567" data-message-error="Message error" data-course-error="Course error">
                    <div class="md-form">
                        <div class="select-wrapper mdb-select"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-64b3ec21-d90f-4365-bfc2-d519817f168c" value=""><ul id="select-options-64b3ec21-d90f-4365-bfc2-d519817f168c" class="dropdown-content select-dropdown w-100"><li class="disabled active"><span class="filtrable">  Kursni tanlang</span></li><li class=" "><span class="filtrable">  HTML5 / CSS3 kursi</span></li><li class=" "><span class="filtrable">  Javascript + jQuery</span></li><li class=" "><span class="filtrable">  MDBoostrap 4</span></li><li class=" "><span class="filtrable">  MySQL</span></li><li class=" "><span class="filtrable">  PHP / OYDT (OOP)</span></li><li class=" "><span class="filtrable">  Yii2 Framework</span></li><li class=" "><span class="filtrable">  JS 2015+ (ES6+)</span></li><li class=" "><span class="filtrable">  NodeJS + ExpressJS</span></li><li class=" "><span class="filtrable">  ReactJS Framework</span></li><li class=" "><span class="filtrable">  Adobe Photoshop</span></li></ul><select class="mdb-select initialized" id="courseEx" name="course">
                            <option value="" disabled="" selected="">Kursni tanlang</option>
                            <option value="1">HTML5 / CSS3 kursi</option>
                            <option value="2">Javascript + jQuery</option>
                            <option value="4">MDBoostrap 4</option>
                            <option value="5">MySQL</option>
                            <option value="6">PHP / OYDT (OOP)</option>
                            <option value="7">Yii2 Framework</option>
                            <option value="8">JS 2015+ (ES6+)</option>
                            <option value="9">NodeJS + ExpressJS</option>
                            <option value="10">ReactJS Framework</option>
                            <option value="11">Adobe Photoshop</option>
                    </select></div>
                        <!-- <label for="courseEx">Kurs</label> -->
                    </div>
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="fullEx" class="form-control" name="full">
                        <label for="fullEx">To'liq ism</label>
                    </div>

                    <div class="md-form pt-3">
                        <i class="fa fa-phone prefix grey-text"></i>
                        <input type="text" id="phoneEx" class="form-control" name="phone" data-plugin-inputmask="inputmask_e596f83c">                        <label for="phoneEx" style="font-size: .8rem; transform: translateY(-80%); -ms-transform: translateY(-80%); -webkit-transform: translateY(-80%);" class="">Telefon raqam</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <textarea id="messageEx" class="form-control md-textarea" name="message"></textarea>
                        <label for="messageEx">Xat</label>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn bg-orange waves-effect waves-light" type="submit">Jo'natish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Kirish</h5>
                <button type="button" class="close btn-warning btn pt-2 pb-2 pl-3 pr-3 m-0 waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Material form login -->
                <form action="/uz/site/login" method="POST" enctype="multipart/form-data">
                    <!-- Material input email -->
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text active"></i>
                        <input type="text" name="LoginForm[username]" id="materialFormLoginEmailEx" class="form-control">
                        <input type="hidden" name="_csrf" value="Y1JxMFdkLVowOzhRGTdMECIoEnoiKkYpDAMaWDo.ADIpIiBdGBFlbg==">
                        <label for="materialFormLoginEmailEx" class="active">Login yoki Elektron pochta</label>
                    </div>

                    <!-- Material input password -->
                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text active"></i>
                        <input type="password" name="LoginForm[password]" id="materialFormLoginPasswordEx" class="form-control">
                        <label for="materialFormLoginPasswordEx" class="active">Parol</label>
                    </div>
                        
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="LoginForm[rememberMe]" value="" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Saqlashni xohlaysizmi?</label>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn bg-orange waves-effect waves-light" type="submit">Kirish</button>
                    </div>
                </form>
                <!-- Material form login -->

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Ro'yxatdan o'tish</h5>
                <button type="button" class="close btn-warning btn pt-2 pb-2 pl-3 pr-3 m-0 waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                
                <form action="/uz/site/signup" method="POST" enctype="multipart/form-data">
                    
                    <div class="md-form d-flex justify-content-center">
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" checked="" id="materialInline1" name="SignupForm[is_active]" value="2">
                            <label class="form-check-label" for="materialInline1">Student</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="materialInline2" name="SignupForm[is_active]" value="3">
                            <label class="form-check-label" for="materialInline2">Ota-ona</label>
                        </div>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="materialFormFirstName" name="SignupForm[first]" class="form-control">
                        <label for="materialFormFirstName">Ism</label>
                        <input type="hidden" name="_csrf" value="Y1JxMFdkLVowOzhRGTdMECIoEnoiKkYpDAMaWDo.ADIpIiBdGBFlbg==">
                    </div>

                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="materialFormLastName" name="SignupForm[last]" class="form-control">
                        <label for="materialFormLastName">Familya</label>
                    </div>
                    
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text active"></i>
                        <input type="text" id="materialFormUsername" name="SignupForm[username]" class="form-control">
                        <label for="materialFormUsername" class="active">Login</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="email" id="materialFormEmail" name="SignupForm[email]" class="form-control">
                        <label for="materialFormEmail">Elektron pochta</label>
                    </div>
                    
                    <div class="md-form d-inline-block w-100 mt-0 mb-0">
                        <div class="file-field big-2">
                            <div class="btn btn-rounded peach-gradient btn-sm float-left waves-effect waves-light">
                                <span>Rasmni tanlang</span>
                                <input type="file" id="materialFormFile" name="SignupForm[file]" class="form-control file-input22">
                            </div>
                            <div class="file-path-wrapper">
                            <input class="file-path validate file-label22" readonly="" type="text" placeholder="Rasmingizni yuklang">
                            </div>
                        </div>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-phone prefix grey-text active"></i>
                        <input type="text" id="signupform-phone" name="SignupForm[phone]" placeholder="Telefon raqam" data-plugin-inputmask="inputmask_8806250c">                    </div>

                    <!-- Material input password -->
                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text active"></i>
                        <input type="password" id="materialFormPassword" name="SignupForm[password]" class="form-control">
                        <label for="materialFormPassword" class="active">Parol</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="materialFormPasswordCo" name="SignupForm[confirm_password]" class="form-control">
                        <label for="materialFormPasswordCo">Parolni takrorlang</label>
                    </div>
                    
                   <!-- Default checked -->
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="SignupForm[agreement]" id="defaultChecked2" unchecked="">
                    <label class="custom-control-label" for="defaultChecked2">Quyidagilarga roziman: <a href="/uz/site/termsandconditions" class="text-danger">shartlar</a></label>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn bg-orange waves-effect waves-light" type="submit">Ro'yxatdan o'tish</button>
                    </div>
                </form>
                <!-- Material form login -->

            </div>
        </div>
    </div>
</div>
<!-- START WWW.UZ TOP-RATING --><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script language="javascript" type="text/javascript">
<!--
top_js="1.0";top_r="id=42721&r="+escape(document.referrer)+"&pg="+escape(window.location.href);document.cookie="smart_top=1; path=/"; top_r+="&c="+(document.cookie?"Y":"N")
//-->
</script>
<script language="javascript1.1" type="text/javascript">
<!--
top_js="1.1";top_r+="&j="+(navigator.javaEnabled()?"Y":"N")
//-->
</script>
<script language="javascript1.2" type="text/javascript">
<!--
top_js="1.2";top_r+="&wh="+screen.width+'x'+screen.height+"&px="+
(((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth)
//-->
</script>
<script language="javascript1.3" type="text/javascript">
<!--
top_js="1.3";
//-->
</script>
<script language="JavaScript" type="text/javascript">
<!--
top_rat="&col=340F6E&t=ffffff&p=BD6F6F";top_r+="&js="+top_js+"";document.write('<img style="display: none" src="http://cnt0.www.uz/counter/collect?'+top_r+top_rat+'" width=0 height=0 border=0 />')//-->
</script><img style="display: none" src="http://cnt0.www.uz/counter/collect?id=42721&amp;r=http%3A//edu.sd.uz/uz/student/index&amp;pg=http%3A//edu.sd.uz/uz/student/update&amp;c=Y&amp;j=N&amp;wh=1366x768&amp;px=24&amp;js=1.3&amp;col=340F6E&amp;t=ffffff&amp;p=BD6F6F" width="0" height="0" border="0"><noscript><IMG height=0 style="display: none" src="http://cnt0.www.uz/counter/collect?id=42721&pg=http%3A//uzinfocom.uz&col=340F6E&t=ffffff&p=BD6F6F" width=0 border=0 /></noscript><!-- FINISH WWW.UZ TOP-RATING -->  
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-86915594-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-86915594-2');
</script>

    <!-- <script src="/themes/default/js/jquery-3.2.1.min.js"></script>
<script src="/assets/8af8e2f7/yii.js"></script>
<script src="/assets/8af8e2f7/yii.validation.js"></script>
<script src="/assets/97703d77/jquery.inputmask.bundle.js"></script>
<script src="/assets/8af8e2f7/yii.activeForm.js"></script>
<script src="/themes/default/js/popper.min.js"></script>
<script src="/themes/default/js/bootstrap.min.js"></script>
<script src="/themes/default/js/mdb-pro.min.js"></script><div class="hiddendiv common"></div>
<script src="/themes/default/js/main.js"></script>
<script src="/themes/default/js/docs.js"></script>
<script src="/themes/default/js/lightbox.min.js"></script>
<script src="/themes/default/js/owl.carousel.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSgdV_XSo8Jk_pM7KCV_xcGhTPq6nEX8c"></script> -->
<script type="text/javascript">
    $('.file-label').click(function (){
        $('.file-input').trigger('click');
    });


    $('.file-label22').click(function (){
        $('.file-input22').trigger('click');
    });
</script>
<script type="text/javascript">jQuery(document).ready(function () {
var inputmask_8806250c = {"mask":"\\+\\9\\9\\899-999-99-99"};
jQuery("#user-phone").inputmask(inputmask_8806250c);
jQuery('#official-signup').yiiActiveForm([{"id":"user-first","name":"first","container":".field-materialFormFirstName","input":"#materialFormFirstName","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.string(value, messages, {"message":"«First» qiymati satr bo`lishi kerak.","min":2,"tooShort":"«First» qiymati minimum 2 belgidan tashkil topishi kerak.","max":50,"tooLong":"«First» qiymati maksimum 50 belgidan oshmasligi kerak.","skipOnEmpty":1});}},{"id":"user-last","name":"last","container":".field-materialFormLastName","input":"#materialFormLastName","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.string(value, messages, {"message":"«Last» qiymati satr bo`lishi kerak.","min":2,"tooShort":"«Last» qiymati minimum 2 belgidan tashkil topishi kerak.","max":50,"tooLong":"«Last» qiymati maksimum 50 belgidan oshmasligi kerak.","skipOnEmpty":1});}},{"id":"user-username","name":"username","container":".field-materialFormUsername","input":"#materialFormUsername","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.required(value, messages, {"message":"«Username» to`ldirish shart."});yii.validation.string(value, messages, {"message":"«Username» qiymati satr bo`lishi kerak.","min":2,"tooShort":"«Username» qiymati minimum 2 belgidan tashkil topishi kerak.","max":255,"tooLong":"«Username» qiymati maksimum 255 belgidan oshmasligi kerak.","skipOnEmpty":1});}},{"id":"user-email","name":"email","container":".field-materialFormEmail","input":"#materialFormEmail","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.required(value, messages, {"message":"«Email» to`ldirish shart."});yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"«Email» qiymati to`g`ri email manzil emas.","enableIDN":false,"skipOnEmpty":1});}},{"id":"user-phone","name":"phone","container":".field-user-phone","input":"#user-phone","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"«Phone» qiymati satr bo`lishi kerak.","skipOnEmpty":1});}},{"id":"user-file","name":"file","container":".field-materialFormFile","input":"#materialFormFile","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.file(attribute, messages, {"message":"Faylni yuklab bo`lmadi.","skipOnEmpty":true,"mimeTypes":[],"wrongMimeType":"Faqat quyidagi MIME-turidagi fayllarni yuklashga ruhsat berilgan: .","extensions":["png","jpg","gif","jpeg"],"wrongExtension":"Faqat quyidagi kengaytmali fayllarni yuklashga ruhsat berilgan: png, jpg, gif, jpeg.","maxSize":1049600,"tooBig":"Fayl hajmi katta. Maksimal fayl hajmi 1 mb bo'lishi kerak.","maxFiles":1,"tooMany":"Siz 1 fayldan ko`pini yuklab ola olmaysiz."});}},{"id":"user-password","name":"password","container":".field-user-password","input":"#user-password","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"«Password» qiymati satr bo`lishi kerak.","min":6,"tooShort":"«Password» qiymati minimum 6 belgidan tashkil topishi kerak.","skipOnEmpty":1});yii.validation.string(value, messages, {"message":"«Password» qiymati satr bo`lishi kerak.","min":6,"tooShort":"«Password» qiymati minimum 6 belgidan tashkil topishi kerak.","skipOnEmpty":1});}},{"id":"user-confirm_password","name":"confirm_password","container":".field-user-confirm_password","input":"#user-confirm_password","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.compare(value, messages, {"operator":"==","type":"string","compareAttribute":"user-password","skipOnEmpty":1,"message":"Passwords don't match"});}}], []);
var inputmask_e596f83c = {"mask":"\\+\\9\\9\\8999999999"};
jQuery("#phoneEx").inputmask(inputmask_e596f83c);
jQuery("#signupform-phone").inputmask(inputmask_8806250c);
});</script>

<div class="drag-target" style="left: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div><div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div></body>