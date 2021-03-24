<?php
use nenad\passwordStrength\PasswordInput;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = Yii::t('app', 'Signup');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-lg-5 well bs-component">

        <p><?= Yii::t('app', 'Please fill out the following fields to signup:') ?></p>

        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'first') ?>
            <?= $form->field($model, 'last') ?>    
            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'password')->widget(PasswordInput::classname(), []) ?>
            <?= $form->field($model, 'confirm_password')->widget(PasswordInput::classname(), []) ?>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Signup'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>

        <?php if ($model->scenario === 'rna'): ?>
            <div style="color:#666;margin:1em 0">
                <i>*<?= Yii::t('app', 'We will send you an email with account activation link.') ?></i>
            </div>
        <?php endif ?>

    </div>
</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fonts/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,100&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/cource.css">
    <title>Ro'yxatdan O'tish</title>
</head>

<body>


    <!-- ==========  Header _starting  ========== -->

    <header>
        <div class="header_menu">

            <div class="container">
                <div class="row  justify-content-between align-items-center">
                    <div class="col-lg-12 ">
                        <nav class="navbar navbar-light navbar-expand-lg mt-3">
                            <a class="navbar-brand" href="index.html"><img src="./images/IT Live full white.svg" alt="error"></a>
                            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                            <div class="collapse navbar-collapse " id="main-menu">
                                <ul class="nav  ml-auto justify-content-center align-items-center ">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Bosh Sahifa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Kurslar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Jamoa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <div class="reg d-flex align-items-center mt-sm-3 mt-lg-0">
                                        <a href="#!" class="nav-link sign_in">Kirish</a>
                                        <a href="#!" class="nav-link sign_out">Ro'yxatdan o'tish</a>
                                    </div>

                                </ul>



                            </div>
                        </nav>
                    </div>>
                </div>
            </div>
        </div>
    </header>


    <!-- ============ Regsitartion_ Starting ============ -->


    <main>
        <div class="registration">
            <div class="container-fluid">
                <div class="row justify-content-center ">
                    <div class="col-lg-5 px-0">
                        <div class="about_reg ">
                            <img src="./images/IT Live full white.svg" alt="error" class="logo">
                            <h2>Hush Kelibsiz!</h2>
                            <p>Ассалому алейкум! Добро пожаловать в IT Live Academy. <br> Желаем вам успешного использования системы. <br> С уважением, IT Live Academy.</p>
                            <div class="social_network">
                              <a href="">  <i class="fa fa-facebook"></i></a>
                               <a href="https://t.me/It_Live_Guliston"> <i class="fa fa-telegram"></i></a>
                           <a href="https://www.youtube.com/channel/UCpDuo4IQhbYhc9OhsiJ-WVA">     <i class="fa fa-youtube"></i></a>
                               <a href=""> <i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 px-5">
                        <div class="col-lg-12">
                            <a class="account ml-auto" href="#!">У меня есть аккаунта</a>
                            <div class="row flex-column justify-content-center mt-5">
                                <h4> Ro'yxatdan o'tish.</h4>
                                <p class="reg_p">Введите свои данные для входа ниже.</p>
                            </div>
                        </div>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Ism</label>
                                    <input type="text" class="form-control" placeholder="Ism" id="name">
                                </div>
                                <div class="form-group shadow-none border-0 col-md-6">
                                    <label for="lastname">Fam</label>
                                    <input type="text" class="form-control " placeholder="Fam" id="lastname">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


     <!-- ========== Starting _ Footer ========== -->

     <footer>
        <div class="footer">
            <div class="container">
                <div class="row justify-content-between align-items-start py-5">
                    <div class="col-lg-3 col-sm-12 col-md-6 mb-3 ">
                        <div class="footer_logo ">
                            <a href="#!"><img src="./images/IT Live full white.svg" alt="error" class="foot_logo"></a>
                            <p class="mt-3">Интерактивные уроки и курсы программирования и создания сайтов (дистанционное обучение) помогут вам в игровой форме изучить основы языков программирования веб-разработки и веб-программирования с нуля. Обучение онлайн 24/7.</p>
                            <a href="#!" class="russion">Русский</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <div class="all_link">
                            <h3>ОБЩИЕ ССЫЛКИ</h3>





                            <a href="#!" class="nav-link"> Отзывы о курсах UCode 
                            Academy</a>
                            <a href="#!" class="nav-link">Политика конфиденциальности</a>
                            <a href="#!" class="nav-link">
                                Условия использования</a>
                            <a href="#!" class="nav-link">Цены и оплата</a>
                            <a href="#!" class="nav-link">Все курсы</a>
                            <a href="#!" class="nav-link">
                                    Партнерская программа</a>
                            <a href="#!" class="nav-link">Комьюнити</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <div class="footer_cource">
                            <h3>НАШИ КУРСЫ</h3>
                            <a href="#!" class="nav-link">Bootstrap 4</a>
                            <a href="#!" class="nav-link">VueJS Фреймворк</a>
                            <a href="#!" class="nav-link">Yii2 Фреймворк</a>
                            <a href="#!" class="nav-link">Modern Javascript</a>
                            <a href="#!" class="nav-link">Javascript/jQuery</a>
                            <a href="#!" class="nav-link">CodeIgniter</a>
                            <a href="#!" class="nav-link">Все курсы</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <div class="question">
                            <p>Есть вопросы? Найдем ответы!</p>
                            <a href="#!">Написать нам</a>
                            <p>Присоединяйтесь к нам!</p>
                            <div class="footer_icon">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-telegram"></i>
                                <i class="fa fa-youtube"></i>
                                <i class="fa fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p>Copyright © 2020, IT Live Education</p>
                        </div>
                    </div>
                </div>
                <div class="fixed">
                    <a href="index.html">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

        </div>
    </footer>







    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js "></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>