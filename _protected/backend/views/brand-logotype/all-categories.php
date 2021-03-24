
<?php
 use yii\helpers\Url;
?>

<div class="container">
<a href="<?=Url::to(['brand-logotype/create'])?>" type="button" class="btn btn-success" >create new logotype </a>  

    <h3 style="text-align:center">all categories of logotypes</h3>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">category</a>
    </div>
    <ul class="nav navbar-nav">
     <?php foreach($categories as $category):?>
      <li  class=""><a style="color:aliceblue !important;" href="<?=Url::to(['/brand-logotype/logo-view', 'id' => $category->id])?>"><?=$category->name?></a></li>
     <?php endforeach?>
    </ul>
  </div>
</nav>



<?php foreach($logotypes as $logotype):?>

<div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4 " style="margin-top:3%; border:1px solid">
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

<?php endforeach;?>
</div>


