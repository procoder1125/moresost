<?php
use yii\helpers\Url;
use common\models\BrandCategory;

?>
<div class="container">
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg  navbar-dark stylish-color scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="<?= Url::to(['site/']) ?>" target="_blank">
        <strong> <span class="fa fa-university"></span> MoReSoFt</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><?=Yii::t("app", "Home")?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ml-2">
            <a class="nav-link" href="https://mdbootstrap.com/docs/jquery/" target="_blank"><?=Yii::t("app", "About Us")?></a>
          </li>
          <li class="nav-item ml-2">
            <a class="nav-link" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"><?=Yii::t("app", "Our Masters")?></a>
          </li>
          <li class="nav-item ml-2">
            <a class="nav-link" href="<?= Url::to("/message/index") ?>" target="_blank"><?=Yii::t("app", "Connect with us")?></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?=Yii::t("app", "Brand logotypes")?>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a style="text-align:center" class="dropdown-item" href="<?= Url::to(['/logotypes/index']) ?>"><?=Yii::t("app", "All logotypes")?> </a>
              <?php $categories = BrandCategory::find()->all();
              foreach ($categories as $category) : ?>

                <a style="text-align:center" class="dropdown-item" href="<?= Url::to("/site/login") ?>"><?= $category->name ?> </a>

              <?php endforeach ?>
            </div>
          </li>

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
              <i class="fa fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <?php if (Yii::$app->user->isGuest) : ?>
                <a class="dropdown-item" href="<?= Url::to("/site/login") ?>"><?=Yii::t("app", "Login")?> <span class="ml-2"><i class="fa fa-sign-in"></i></span></a>
                <a class="dropdown-item" href="<?= Url::to("/site/signup") ?>"><?=Yii::t("app", "Registration")?> <span class="ml-2"> <i class="fa fa-user-plus"></i></span></a>
              <?php else : ?>
                <a class="dropdown-item" data-method="post" href="<?= Url::to(['/user-cabinet/index']) ?>"><?=Yii::t("app", "User Cabinet")?> <span style="float:right;"><i class="fa fa-sign-in"></i></span></a>
                <a class="dropdown-item" data-method="post" href="<?= Url::to(['/site/logout']) ?>"><?=Yii::t("app", "Log out ")?><span style="float:right;"><i class="fa fa-sign-out"></i></span></a>
              <?php endif; ?>
            </div>
          </li>

          <li class="nav-item dropdown">
            <div class="dropdown" style="">

              <!--Trigger-->
              <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= \Yii::$app->language ?></button>

              <!--Menu-->
              <div class="dropdown-menu dropdown-primary">
                <a class="dropdown-item" href="<?= Url::to(['site/change-language', 'lang' => 'ru']) ?>">Ru</a>
                <a class="dropdown-item" href="<?= Url::to(['site/change-language', 'lang' => 'en']) ?>">En</a>
                <a class="dropdown-item" href="<?= Url::to(['site/change-language', 'lang' => 'uz']) ?>">Uz</a>

              </div>
            </div>
          </li>

        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
  <!-- data-ride="carousel" -->


</div>