<?php
 use yii\helpers\Url;
?>
<header class="main-header" style="width:100%; position:fixed !important;">

<!-- Logo -->
<a href="<?=\yii\helpers\Url::to(["site/index"])?>" class="logo" style="background-color:#eee; ">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>A</b>LT</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>Admin</b></span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation" >
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" onclick="openNav()" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a> 
  
  <!--Dropdown primary-->
    
    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <?=\Yii::$app->language?><span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a  href="<?=Url::to(['site/change-language', 'lang'=>'ru'])?>">Ru</a></li>
        <li><a  href="<?=Url::to(['site/change-language', 'lang'=>'en'])?>">En</a></li>
        <li><a  href="<?=Url::to(['site/change-language', 'lang'=>'uz'])?>">Uz</a></li>
      </ul>
    </div>
    <!--/Dropdown primary-->

  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown messages-menu">
        <!-- Menu toggle button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-envelope-o"></i>
          <span class="label label-success">4</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">You have 4 messages</li>
          <li>
            <!-- inner menu: contains the messages -->
            <ul class="menu">
              <li><!-- start message -->
                <a href="#">
                  <div class="pull-left">
                    <!-- User Image -->
                    <img src="../../img/admin.jpg" class="img-circle" alt="User Image">
                  </div>
                  <!-- Message title and timestamp -->
                  <h4>
                    Support Team
                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                  </h4>
                  <!-- The message -->
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
              <!-- end message -->
            </ul>
            <!-- /.menu -->
          </li>
          <li class="footer"><a href="#">See All Messages</a></li>
        </ul>
      </li>
      <!-- /.messages-menu -->

      <!-- Notifications Menu -->
      <li class="dropdown notifications-menu">
        <!-- Menu toggle button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">10</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">You have 10 notifications</li>
          <li>
            <!-- Inner Menu: contains the notifications -->
            <ul class="menu">
              <li><!-- start notification -->
                <a href="#">
                  <i class="fa fa-users text-aqua"></i> 5 new members joined today
                </a>
              </li>
              <!-- end notification -->
            </ul>
          </li>
          <li class="footer"><a href="#">View all</a></li>
        </ul>
      </li>
      <!-- Tasks Menu -->
      <li class="dropdown tasks-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-flag-o"></i>
          <span class="label label-danger">9</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">You have 9 tasks</li>
          <li>
            <!-- Inner menu: contains the tasks -->
            <ul class="menu">
              <li><!-- Task item -->
                <a href="#">
                  <!-- Task title and progress text -->
                  <h3>
                    Design some buttons
                    <small class="pull-right">20%</small>
                  </h3>
                  <!-- The progress bar -->
                  <div class="progress xs">
                    <!-- Change the css width attribute to simulate progress -->
                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
            </ul>
          </li>
          <li class="footer">
            <a href="#">View all tasks</a>
          </li>
        </ul>
      </li>
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <img src="../../img/admin.jpg" class="user-image" alt="User Image">
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs">Kamolxon Ne'matjonov</span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="/img/admin.jpg" class="img-circle" alt="User Image">

            <p>
              Kamolxon Ne'matjonov - <?=Yii::t("app", 'Web Developer')?>
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-xs-4 text-center">
                <a href="#"><?=Yii::t("app", "Followers")?></a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#"><?=Yii::t("app", "Sales")?></a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#"><?=Yii::t("app", "Friends")?></a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="#" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li>
    </ul>
  </div>
</nav>
</header>