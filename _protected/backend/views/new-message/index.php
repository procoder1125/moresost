<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            

  <?php
use yii\helpers\Url;

foreach($new_message as $message):?>
 <a href="<?=Url::to(['new-message/about-message', 'id' => $message->id])?>">
     <div class="col-md-12">
      <div class="row">
        <div class="col-md-12" style="border:1px solid; border-left-radius:50%;">
        <span class="col-md-1"><?=$message->id?></span>
        <span class="col-md-2" > <?=$message->name?></span>
        <span class="col-md-3"><?=$message->email?> </span> 
        <span class="col-md-2"><?=$message->subject?></span>
        <span class="col-md-3"> <?=$message->message?> </span>
        <span style="overflow:hidden" class="col-md-1"> <?=$message->created_at?></div></span> 
       
      </div>
     </div>     
 </a>
 <?php endforeach?>

</div>



