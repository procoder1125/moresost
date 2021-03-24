<?php 
use yii\helpers\Url;
?>

<div class="container">
<div class="btn-group">
  <a href="<?=Url::to(['/otvet/create', 'id' => $message->user_id])?>" type="button" class="btn btn-default "> <span><i class="fa fa-mail-reply"></i></span> ответить</a>
  <button type="button" class="btn btn-default"><span><i class="fa fa-arrow-right"></i></span> переслать</button>
  <button type="button" class="btn btn-default"><span><i class="fa fa-trash"></i></span> удалить</button>
  <button type="button" class="btn btn-default"><span><i class="fa fa-thumbs-down"></i></span> спам</button>
</div>

<div>
    <h4 class="" style="margin-left:8%;">About: <?=$message->subject?></h4>
    <h5 class="" style="margin-left:8%;">From: <?=$message->name?></h5>
    <h5 class="" style="margin-left:8%;">  Email:  <?=$message->email?></h5>
    <h5 class="" style="margin-left:8%;">Send: <?=$message->created_at?></h5>
</div>
<hr>
 
 <div class="col-md-8"> 
    <p class="" style="margin-left:8%;"><?=$message->message?></p>
 </div>
  
</div>