<?php
use yii\helpers\Url;
use common\models\Courses;
use common\models\Groups;
use common\models\Student;
use common\models\Message;
use common\models\BrandCategory;

$courses = Courses::find()->all();
$groups = Groups::find()->all();

$messengers = Message::find()->all();

?>
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?= Url::to('/') ?>" class="site_title"><i class="fa fa-code"></i></a>
        </div>
        <?php
        ?>
        <?php
        ?>
        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_info">
                <span>Добро пожаловать,</span>
                <h2><?= $user->user_profile->full ?></h2>
            </div>
        </div>


        <?php
        ?>
        <!-- /menu prile quick info -->
        <div class="clearfix"></div>
        <br />
        <?php
        // $langs = \common\models\Lang::find()->where('id != :current_id', [':current_id' => \common\models\Lang::getCurrent()->id])->all();
        // foreach ($langs as $lang){
        //     echo \yii\helpers\Html::a($lang->name, '/backend/'.$lang->url.'/'.Yii::$app->getRequest()->pathInfo, ['style' => 'margin-right: 10px; margin-left: 15px; color: white']);
        // }
        ?>
        
        <form action="<?=Url::to(['site/search'])?>" method="get" class="sidebar-form" style="margin-left:2%;">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit"  id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu animated">
            <div class="menu_section ">
                <ul class="nav side-menu ">
                    <li class="nav-item"><a style=""><i class="fa fa-envelope"></i> <span style="padding-right:10%;"><?= count(Message::find()->all()) ?></span> Почта<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu " style="display: none">

                            <li class="" style="animation-duration:1s !important;"><a href="<?= Url::to(['/new-message/index']) ?>"><i class="fa fa-envelope"></i><?= count(Message::find()->all()) ?> <span style="margin-left:6%;">Входящие</span></a>
                            </li>
                            <li class="" style="animation-duration:1s !important;"><a href="<?= Url::to(['/otvet/index']) ?>"><i class="fa fa-mail-reply"></i> Отправленные</a>
                            </li>
                            <li class="" style="animation-duration:1s !important;"><a href="<?= Url::to('/user/index') ?>"><i class="fa fa-tasks"> </i></i> Черновики</a>
                            </li>
                            <li class="" style="animation-duration:1s !important;"><a href="<?= Url::to('/user/index') ?>"><i class="fa fa-thumbs-down"></i></i> Спам</a>
                            </li>
                            <li class="" style="animation-duration:1s !important;"><a href="<?= Url::to('/user/index') ?>"><i class="fa fa-archive"></i></i> Корзина</a>
                            </li>
                        </ul>
                    </li>

                    <li class="" style="margin-top:13%;"><a><i class="fa fa-user"></i> Пользователи<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu " style="display: none">
                            <li class="" style="animation-duration:1s !important;"><a href="<?= Url::to(['/user/index']) ?>">Список пользователей</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bookmark"></i> Языки<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?= Url::to('/lang/index') ?>">Список языков</a>
                            </li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-book"></i>Courses<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <?php foreach ($courses as $cours) : ?>
                                <li><a href="<?= Url::to(['/courses/view', 'id' => $cours->id]) ?>"><?= $cours->title ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-group"></i>Groups<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?= Url::to(['groups/']) ?>">All groups</a></li>
                            <?php foreach ($groups as $group) : ?>
                                <li><a href="<?= Url::to(['/groups/group', 'id' => $group->id]) ?>"><?= $group->name ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-graduation-cap"></i> Students<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?= Url::to(['/student/index']) ?>">Список студентов</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-camera"></i> Galery <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?= Url::to('foto-cours/index') ?>">Foto Courses</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-camera"></i> Brand Logotype <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <?php $categories = BrandCategory::find()->all(); ?>
                            <li><a href="<?= Url::to(['brand-logotype/all-categories']) ?>">All categories</a>
                            </li>
                            <?php foreach ($categories as $category) : ?>
                                <li><a href="<?= Url::to(['/brand-logotype/logo-view', 'id' => $category->id]) ?>"><?= $category->name ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a href="" data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a href="<?= Url::to(['/site/logout']) ?>" data-method="POST" data-confirm = 'are you shure tu log out !' class="pull-right" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>