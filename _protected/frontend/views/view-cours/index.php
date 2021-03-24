<?php
 use yii\helpers\Url;
?>

<div class="container pb-4" style="margin-top:8%;">
 <div class="row box-sizing:border-box; display:d-block">
     <div class="col-lg-8">
        <h1><?=$cours_name->title;?></h1>
        <div class="row" style="margin-top:3%;">
        <div>
        <span class="float-left ml-4">
            <i style="color:orange" class="fa fa-star"></i>
            <i style="color:orange" class="fa fa-star"></i>
            <i style="color:orange" class="fa fa-star"></i>
            <i style="color:orange" class="fa fa-star"></i>
            <i style="color:orange" class="fa fa-star"></i>
            </span>
        </div>

        <div class="" style="margin-left:20%;">
            <h6 style="background-color:orange; color:aliceblue" class="p-2" ><?=$cours_name->price;?> SUM</h5>
        </div>   

        </div>
        <div style="text-align:justify" class = "col-lg-12 col-md-8 col-sm-12 " >   
                <h5 style="margin-top:5%; text-align:center; color:green">About <span style="color:crimson"><?=$cours_name->title?></span></h5>
            <p style="margin-top:5%;">
                <?=$cours_name->description?>
            </p>
            <button class="btn btn-warning">Join us</button>
        </div>
     </div>

     <div class="col-lg-4">
     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 pt-5">
                <div class="sticky pb-5" style="position: relative; width: 270px;  top: -50px; z-index: 2;">
                    <div class="card mb-3 w-100">
                    <div class="card-header bg-transparent">
                            <h1 class="text-header2 text-center bottom-dots pb-4">Tezkor ma'lumot</h1>
                        </div>
                        <div class="card-body text-warning p-0">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="text-black">
                                        <i class="fa fa-clock-o text-orange pr-2"></i> Davomiyligi                                    </span>
                                    <span class="text-dark-black fs-18">1 oy</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="text-black">
                                        <i class="fa fa-certificate text-orange pr-2"></i> Sertifikat                                    </span>
                                    <span class="text-dark-black fs-18">Bor</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="text-black">
                                        <i class="fa fa-group text-orange pr-2"></i> O'quvchilar                                    </span>
                                    <span class="text-dark-black fs-18">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="text-black">
                                        <i class="fa fa-book text-orange pr-2"></i> Darslar                                    </span>
                                    <span class="text-dark-black fs-18">12</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-center align-items-center text-center">
                                    <a class="btn bg-orange text-white btn-warning apply-for-course waves-effect waves-light" data-course="MDBoostrap 4">Kursga yozilish</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><div class="sticky-placeholder" style="width: 270px; height: 0px;"></div>
            </div>
        </div>

    </div>
</div>

<div class=" " >
      <img style=""  class="img-fluid d-block w-100" src="/img/ps-9.jpg"
        alt="First slide">

        <div class="carousel-caption">
           <div class="container">
              
          </div>
      </div>
    </div>
