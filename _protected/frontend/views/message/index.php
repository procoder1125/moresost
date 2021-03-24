<?php
use yii\widgets\ActiveForm;
use PHPUnit\Util\Type;
use yii\helpers\Url;
use common\models\Message;
use common\models\Otvet;
use yii\web\View;
?>

<?php $form = ActiveForm::begin([
    'action' => '',
    'class' => 'md-form',
]); ?>
<div class="container">
    <!--Section: Contact v.2-->
    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <!-- <form id="contact-form" name="contact-form" action="mail.php" method="POST"> -->
                <?php $form = ActiveForm::begin([
                    'action' => Url::to('message/index'),
                    'method' => 'post',
                ]) ?>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <?= $form->field($model, 'name', [
                        'options' => [
                            'class' => 'col-md-6',

                        ],
                        'template' => '
                    <div class="">
                    <div class="md-form mb-0">
                        {input}
                        <label for="name" class="">Your name</label>
                     </div>
                     </div>'
                    ])->textInput(['value' => $user_profile->first]) ?>


                    <!--Grid column-->

                    <!--Grid column-->
                    <?php if (Yii::$app->user->isGuest) : ?>
                        <?= $form->field($model, 'email', [
                            'options' => [
                                'class' => 'col-md-6'
                            ],
                            'template' => '
                    <div class="">
                        <div class="md-form mb-0">
                            {input}
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>'
                        ])->textInput() ?>
                    <?php endif ?>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <?= $form->field($model, 'subject', [
                    'options' => [

                        'class' => '',

                    ],
                    'template' => '
                    <div class="row">
                    <div class="col-md-12 ">
                        <div class="md-form mb-0">
                            {input}
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>'
                ])->textInput() ?>


                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->

                    <?= $form->field($model, 'message', [
                        'options' => [

                            'class' => 'col-md-12',

                        ],
                        'template' => '
                    <div class="">

                        <div class="md-form">
                            {input}
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>'
                    ])->textarea([
                        'class' => 'form-control md-textarea',

                    ]) ?>


                    <!--Grid row-->


                    <div class="text-center text-md-left">

                        <button class="btn btn-primary">Send</button>
                    </div>
                    <div class="status"></div>
                </div>
                <?php ActiveForm::end() ?>



                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fa fa-map-marker fa-2x"></i>
                            <p>Tashkent, Amir Temur, UZB</p>
                        </li>

                        <li><i class="fa fa-phone mt-4 fa-2x"></i>
                            <p>+ 99890 316 95 55</p>
                        </li>

                        <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                            <p>moresoft.Umail.uz</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

    </section>
    <!--Section: Contact v.2-->
    <!--Section: Contact v.2-->
</div>

<?php ActiveForm::end(); ?>


<?php $messages = Message::find()->where(['user_id' => Yii::$app->user->id])->all() ?>
<?php $messages1 = Otvet::find()->where(['user_id' => Yii::$app->user->id])->all() ?>

<div class="container " style="margin-top:6%;">
    <div class="chat-message" >

        <ul class="list-unstyled chat ">
            <?php foreach ($messages as $message) : ?>
                <li class="d-flex justify-content-between mb-4">

                    <div class="col-md-8 chat-body white p-3 ml-2 z-depth-1">
                        <div class="header">
                            <strong class="primary-font"><?= $user_profile->first ?></strong>
                            <small class="pull-right text-muted"><i class="far fa-clock"></i> <?= date("d.m.Y H:i", strtotime($message->created_at))?></small>
                        </div>
                        <hr class="w-100">
                        <p class="mb-0">
                        <?=$message->message?>
                        </p>
                    </div>
                </li>
            <?php endforeach ?>


          <?php foreach($messages1 as $message1):?>
          <li class="d-flex justify-content-between mb-4">
                <div style="margin-left:13%;" class="col-md-8 chat-body white p-3 z-depth-1">
                    <div class="header">
                        <strong class="primary-font">MoreSoft.uz</strong>
                        <small class="pull-right text-muted"><i class="far fa-clock"><?=date("d.m.Y H:i", strtotime($message1->created_at))?></i> </small>
                    </div>
                    <hr class="w-100">
                    <p class="mb-0">
                        <?=$message1->message?>
                    </p>
                </div>

            </li>
          <?php endforeach?>

            
        </ul>

    </div>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->
</div>