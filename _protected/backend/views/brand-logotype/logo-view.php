<?php
 use yii\helpers\Url;
?>

<div class="container">
<a href="<?=Url::to(['brand-logotype/create', 'id' => $category->id])?>" type="button" class="btn btn-success" >create new logotype </a>  

<h3 class="" style="text-align:center"> lofotype for <?=$category->name?> </h3>

<?php foreach($logotypes as $logotype):?>

<div style="margin-top:5%;">
<div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4 mt-4" style="border:1px solid">
  <!-- Card -->
  <div class="card card-cascade narrow card-ecommerce" style="margin-top:2%;">
    <!-- Card image -->
    <div class="view view-cascade overlay">
      <img class="" style="width:100%; height:100%;" src="/fotobrand/<?=$logotype->filename?>" class="card-img-top"
        alt="sample photo">
      <a href="<?=Url::to(['view-cours/index', 'id' => $cours->id])?>">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!-- Card image -->
    <!-- Card content -->
    <div class="card-body card-body-cascade ">
      <!-- Category & Title -->
      


      <h6  class="card-title pt-4 pb-4">
        <strong>
          <a href=""><?=$cours->title?></a>
        </strong>
      </h6>
      <!-- Description -->
      
      <!-- Card footer -->
      <div class="card-footer p-0 mr-4 " >
        <div class="row">
          <div class="" style="margin-left:20%; megin-right:auto;">
          <a href="<?=Url::to(['/brand-logotype/update', 'id' => $logotype->id])?>" type="button" class="btn btn-primary" >update</a>
          <a href="<?=Url::to(['/brand-logotype/delete', 'id' => $logotype->id])?>" data-method="post" data-confirm ="O'chirishni tasdiqlaysizmi ???" type="button" class="btn btn-danger" >delete</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Card content -->
  </div>
  <!-- Card -->
</div>
</div>

<?php endforeach;?>
</div>



