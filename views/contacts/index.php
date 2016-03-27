<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = \Yii::t('main', 'Contacts');

print $this->render('@app/views/site/bread');

?>

<!-- Contact Info -->
<section class="contacts_block">
    <div class="row">
        <div class="col-lg-7 col-sm-7 padbot20" data-animated="fadeIn">
            <!-- Contact Form -->
            <div class="contact_form top_form">
                <div id="note"></div>
                <div id="fields">



                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                    <div class="alert alert-success">
                        Thank you for contacting us. We will respond to you as soon as possible.
                    </div>

                    <?php endif; ?>



                    <form id="myform" action="/contacts/" method="post" role="form">
                        <input type="hidden" name="_csrf" value="WGVWV3U4NUZqIQcGN1VXBQ83N2IzVkUVPxQbMEZoTTFhDAVgD1BaCw==">

                    </form>




                    <?php $form = ActiveForm::begin(['id' => 'myform']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true,'placeholder' => 'Name'])->label(false)  ?>

                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false)  ?>

                    <?= $form->field($model, 'subject')->textInput(['placeholder' => 'subject'])->label(false)  ?>

                    <?= $form->field($model, 'body')->textArea(['rows' => 6,'placeholder' => 'Body'])->label(false)  ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>






                </div>
            </div><!-- //Contact Form -->
        </div>
    </div>
</section><!-- //Contacts Info -->