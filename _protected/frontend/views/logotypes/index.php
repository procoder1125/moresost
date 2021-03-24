<?php
use yii\helpers\Url;
?>

<div class="container">
<?php foreach ($logotypes as $logotype) : ?>
  <div style="margin-top:8%; margin-bottom:3%;">
    <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4 mt-4">
      <!-- Card -->
      <div class="card card-cascade narrow card-ecommerce">
        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img src="/fotobrand/<?= $logotype->filename ?>" class="card-img-top" alt="sample photo">
          <a href="<?= Url::to(['view-cours/index', 'id' => $cours->id]) ?>">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Card image -->
        <!-- Card content -->
        <div class="card-body card-body-cascade ">
          <!-- Category & Title -->
          <div class="row">
            
          </div>


          <h6 class="card-title pt-2 pb-2">
            <strong>
              <a href=""><?= $logotype->name ?></a>
            </strong>
          </h6>
          <!-- Description -->

          <!-- Card footer -->
          <div class="card-footer p-0 mr-4">
            
            <span class="float-left" style="color:salmon">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
            <span class="float-right font-weight-bold" style="color:orange">
              <strong><?= $cours->price ?></strong>
              <a href="<?=Url::to(['logotypes/download', 'id' => $logotype->id])?>" type="button" class="btn btn-success btn-sm">download</a>
            </span>
          </div>
        </div>
        <!-- Card content -->
      </div>
      <!-- Card -->
    </div>
  </div>

<?php endforeach; ?>
</div>