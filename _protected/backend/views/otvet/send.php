<?php 
 use yii\widgets\ActiveForm;
?>
<div class="container"> 
    <div  style="border:1px solid" class="col-md-8">
        <div class="row">
              <div class="col-md-12"><h5 class="col-md-1" style="margin-left:5%;">From:</h5> <h5 class="col-md-4">MoreSoft@mail.ru</h5></div>
         </div>

         <div class="row">
              <div class="col-md-12"><h5 class="col-md-1" style="margin-left:5%;">To:</h5> <h5 class="col-md-4">" 


<?=$user_profile->full?> " </h5></div>
         </div>
         <div class="row">
              <div class="col-md-12"><h5 class="col-md-1" style="margin-left:5%;">Email:</h5> <h5 class="col-md-4"><?=$user->email?> </h5></div>
         </div>
         <div class="row">
              <div class="col-md-12"><h5 class="col-md-1" style="margin-left:5%;">Subject:</h5> <h5 class="col-md-4"><?=$message->subject?> </h5></div>
         </div>

         
    </div>
    <div class="col-md-8 " style="margin-top:3%;">
         <?php $form = ActiveForm::begin()?>
            <?=$form->field($model,'message')->textarea()?>
            <button class="btn btn-primary">send</button>
         <?php ActiveForm::end()?>
    </div>
   


</div>