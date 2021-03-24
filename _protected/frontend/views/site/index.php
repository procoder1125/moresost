<?php
 use common\models\FotoCours;
 use common\models\Groups;
 use yii\helpers\Url;
?>
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox" style="">
    <!--First slide-->
    <div class="carousel-item active " >
      <img style=""  class="img-fluid d-block w-100" src="/img/ps-1.jpg"
        alt="First slide">

        <div class="carousel-caption">
           <div class="container">
              <h3 class="h3-responsive animated fadeInLeft duration-2 delay-0" data-wow-duration="0.6s"><?=Yii::t("app", "Do you want to learn HTML/CSS coding")?></h3>
              <p class="sub-title animated fadeInLeft duration-2 delay-1" data-wow-delay="0.6s"><?=Yii::t("app", "Do you want to be web designer ?")?></p>
              <p class="animated fadeInLeft duration-2 delay-2">
                <?=Yii::t("app", "Students are enrolled in the courses.")?></p>
              <a class="animated fadeInLeft duration-2 delay-3 btn btn-warning" href="<?=Url::to(['view-cours/index', 'id'=>1])?>">Read more</a>
          </div>
      </div>
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <div class="view">
          <img class="d-block w-100" src="/img/ps-2.jpg"
          alt="Second slide">
      </div>
      <div class="carousel-caption">
           <div class="container">
              <h3 class="h3-responsive animated fadeInLeft duration-2 delay-0" data-wow-duration="0.6s">Adobe Photoshop CC 2018</h3>
              <p class="sub-title animated fadeInRight duration-2 delay-1" data-wow-delay="0.6s"><?=Yii::t("app", "Do you want to be web designer ?")?></p>
              <p class="animated fadeInLeft duration-2 delay-2"><?=Yii::t("app", "Students are picking up Adobe Photoshop CC2018. Places are limited.")?></p>
              <a class="btn btn-warning animated fadeInRight duration-2 delay-3" href="http://sd.uz/uz/course/kursy-po-adobe-photoshop-v-tashkente/11">Batafsil</a>
          </div>
      </div>
      
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <div class="view">
             <img class="d-block w-100" src="/img/ps-4.jpg"
             alt="Third slide">
      </div>
      <div class="carousel-caption">
           <div class="container">
              <h3 class="h3-responsive animated fadeInRight duration-2 delay-0" data-wow-duration="0.6s">Adobe Photoshop CC 2018</h3>
              <p class="sub-title animated fadeInLeft duration-3 delay-1" data-wow-delay="1s">Web dizayner bo'lmoqchimisiz?</p>
              <p class="animated fadeInRight duration-2 delay-2">Adobe Photoshop CC2018 kursiga o'quvchilar yig'ilmoqda. Joylar chegaralangan.</p>
              <a class="btn btn-warning animated fadeInLeft duration-2 delay-3" href="http://sd.uz/uz/course/kursy-po-adobe-photoshop-v-tashkente/11">Batafsil</a>
          </div>
      </div>
   
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<div class="container">
    <div class ="row">
        <div class="col-lg-12 col-md-4"></div>
        <div class="col-lg-12 col-md-4"></div>
        <div class="col-lg-12 col-md-4"></div>
    </div>
</div>


    <!-- Start service  -->

    <section id="mu-service mt-4">
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3><?=Yii::t("app", "Learn Online")?></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3><?=Yii::t("app", "Expert Teachers")?></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3><?=Yii::t("app", "Best Classrooms")?></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- End service  -->

  <div class="row">
      <!-- Section: Products v.2 -->
<section class="text-center my-5 container">

<!-- Section heading -->

<!-- Section description -->


<!-- Grid row -->
<div class="container">
<div class="row">

<!-- Grid column -->
 

<?php foreach($courses as $cours):?>
<div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4 mt-4">
  <!-- Card -->
  <div class="card card-cascade narrow card-ecommerce">
    <!-- Card image -->
    <div class="view view-cascade overlay">
      <img src="/fotocours/<?=(FotoCours::findOne(['cours_id' => $cours->id]))->filename?>" class="card-img-top"
        alt="sample photo">
      <a href="<?=Url::to(['view-cours/index', 'id' => $cours->id])?>">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!-- Card image -->
    <!-- Card content -->
    <div class="card-body card-body-cascade ">
      <!-- Category & Title -->
      <div class="row">
        <div class="col-4">
        <i class="fa fa-clock-o"></i>  <span style="font-size:13px;">1 <?=Yii::t("app", "month")?></span>
        </div>
        <div class="col-4">
        <i class="fa fa-book"></i>  <span style="font-size:13px;">12 </span>
        </div>
        <div class="col-4">
        <i class="fa fa-group"></i>  <span style="font-size:13px;"> <?=count(Groups::find()->where(['cours_id' => $cours->id])->all())?> </span>
        </div>
      </div>


      <h6  class="card-title pt-4 pb-4">
        <strong>
          <a href=""><?=$cours->title?></a>
        </strong>
      </h6>
      <!-- Description -->
      
      <!-- Card footer -->
      <div class="card-footer p-0 mr-4">
        <span class="float-left font-weight-bold" style="color:orange">
          <strong><?=$cours->price?></strong> <p><?=Yii::t("app", "SUM")?></p>
        </span>
        <span class="float-right" style="color:salmon">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        </span>
      </div>
    </div>
    <!-- Card content -->
  </div>
  <!-- Card -->
</div>

<?php endforeach;?>
<!-- Grid column -->




    

</div>
</div>
<!-- Grid row -->

</section>
<!-- Section: Products v.2 -->
  </div>

<div class="container"> 
<!-- Section: Blog v.1 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Recent posts</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid" src="/img/react_js.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="green-text">
        <h6 class="font-weight-bold mb-3"><i class="fa fa-utensils pr-2"></i>React.JS</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>The last version of script</strong></h3>
      <!-- Excerpt -->
      <p>React makes it painless to create interactive UIs. Design simple views for each state in your application, and React will efficiently update and render just the right ...</p>
      <!-- Post data -->
      <p>by <a><strong>Carine Fox</strong></a>, 19/08/2018</p>
      <!-- Read more button -->
      <a class="btn btn-success btn-md">Read more</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="pink-text">
        <h6 class="font-weight-bold mb-3">Android</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>Who want to coding with android</strong></h3>
      <!-- Excerpt -->
      <p>Android software development is the process by which new applications are created for devices running the Android operating system. Google states that ...
        provident.</p>
      <!-- Post data -->
      <p>by <a><strong>Carine Fox</strong></a>, 14/08/2018</p>
      <!-- Read more button -->
      <a class="btn btn-pink btn-md mb-lg-0 mb-4">Read more</a>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <img class="img-fluid" src="/img/android.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid" src="/img/yii2.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="indigo-text">
        <h6 class="font-weight-bold mb-3">YII 2 Framework</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>What we can do with Yii 2</strong></h3>
      <!-- Excerpt -->
      <p>Yii is a high performance, component-based PHP framework for rapidly developing modern Web applications. The name Yii (pronounced Yee or [ji:] ) means ...</p>
      <!-- Post data -->
      <p>by <a><strong>Carine Fox</strong></a>, 11/08/2018</p>
      <!-- Read more button -->
      <a class="btn btn-indigo btn-md">Read more</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Blog v.1 -->
</div>

  
  

<!-- <style>
#mu-about-us {
  /* display: inline-block; */
  float: left;
  width: 100%;
  padding: 100px 0;
}
.mu-service-single1{
    background-color: #33b5e5;
    padding-top:10px;
    padding-bottom:10px;
    margin:0;  
}
.mu-service-single2{
    background-color: #00C851;
    padding-top:10px;
    padding-bottom:10px;
}
.mu-service-single3{
    background-color: #ffbb33;
    padding-top:10px;
    padding-bottom:10px;
}
#mu-about-us .mu-about-us-area {
  display: inline;
  float: left;
  width: 100%;
}
#mu-about-us .mu-about-us-area .mu-about-us-left {
  /* display: inline; */
  float: left;
  width: 100%;
}
#mu-about-us .mu-about-us-area .mu-about-us-left h2 {
  font-size: 40px;
  margin-bottom: 20px;
  text-align: left;
}
#mu-about-us .mu-about-us-area .mu-about-us-left ul {
  margin-left: 25px;
  margin-bottom: 15px;
}
#mu-about-us .mu-about-us-area .mu-about-us-left ul li {
  line-height: 30px;
  list-style: circle;
}
#mu-about-us .mu-about-us-area .mu-about-us-right {
  display: inline;
  float: left;
  width: 100%;
  display: block;
  width: 100%;
  background-color: #ccc;
}
#mu-about-us .mu-about-us-area{}
#mu-about-us .mu-about-us-area .mu-about-us-right a {
  display: block;
  width: 100%;
  position: relative;
}
#mu-about-us .mu-about-us-area .mu-about-us-right a img {
  width: 100%;
}
#mu-about-us .mu-about-us-area .mu-about-us-right a:after {
  background-color: rgba(0, 0, 0, 0.8);
  bottom: 0;
  color: #ddd;
  content: '\f04b';
  font-family: fontAwesome;
  font-size: 50px;
  left: 0;
  padding-top: 27%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
}

/*==== about us dynamic video player ====*/
#about-video-popup {
  background-color: rgba(0, 0, 0, 0.9);
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  text-align: center;
  bottom: 0;
  z-index: 99999;
}
#about-video-popup span {
  color: #fff;
  cursor: pointer;
  float: right;
  font-size: 30px;
  margin-right: 50px;
  margin-top: 50px;
}
#about-video-popup iframe {
  background: url(../img/loader.gif) center center no-repeat;
  margin: 10% auto;
  width: 650px;
  height: 450px;
}

.mu-title {
  display: inline;
  float: left;
  text-align: center;
  width: 100%;
}
.mu-title h2 {
  color: #000;
  margin-bottom: 10px;
  text-transform: uppercase;
}
.mu-title p {
  color: #555;
  letter-spacing: 0.3px;
  line-height: 1.7;
  padding: 0 120px;
}
#mu-service {
  display: inline-block;
  float: left;
  margin-top: -80px;
  width: 100%;
}
#mu-service .mu-service-area {
  display: inline;
  float: left;
  width: 100%;
}
#mu-service .mu-service-area .mu-service-single {
  background-color: #01bafd;
  color: #fff;
  display: inline;
  float: left;
  padding: 35px 25px;
  text-align: center;
  width: 100%;
}
#mu-service .mu-service-area .mu-service-single:nth-child(2) {
  background-color: #2ecc71;
}
#mu-service .mu-service-area .mu-service-single:nth-child(3) {
  background-color: #45a0de;
}
#mu-service .mu-service-area .mu-service-single span {
  font-size: 30px;
}
#mu-service .mu-service-area .mu-service-single h3 {
  font-size: 25px;
}
#mu-service .mu-service-area .mu-service-single p {
  font-weight: lighter;
}

</style> -->