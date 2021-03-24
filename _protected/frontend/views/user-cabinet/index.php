<?php
 use common\models\FotoCours;
 use yii\helpers\Url;
 use common\models\Groups;
 use common\models\User;
 use common\models\UserProfile;

 $user = User::findOne(['id' => Yii::$app->user->id]);
 $user_profile = UserProfile::findOne(['user_id' => Yii::$app->user->id]);
?>

<div class="mt-4  mb-4" style="margin-top:0; background-color:pink">
    <h4 style="text-align:center; padding-top:8%; padding-bottom:2%;">Welcome to Cabinet</h4>
</div>


<div class="container">
  <div class="row">
  <div class="card testimonial-card col-lg-4 col-md-6 col-sm-12">
          <!--Background color-->
          <div class="card-up indigo "></div>
          <!--Avatar-->
          <div class="avatar mx-auto white" >
            <img  src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid">
          </div>
          <div class="card-body">
            <!--Name-->
            <h4 class="font-weight-bold mb-4"><?=$user_profile->full?></h4>
              
            <hr>
            <!--Quotation-->
             <h5><a style="font-family:san-serif" href="<?=Url::to(['/user-cabinet/update'])?>"><span><i class="fa fa-cogs"> </i></span> User Profile</a></h4>
          </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <h5 style="text-align:center; font-weight:700;">Learning courses</h5>
    </div>
  </div>


</div>