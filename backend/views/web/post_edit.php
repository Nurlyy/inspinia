<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
use dosamigos\ckeditor\CKEditor;
use yii\bootstrap4\Html;

?>


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Post edit</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo Url::to('/site/index') ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Post Edit</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Post info</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">

                            <fieldset>
                                <?php $form = ActiveForm::begin(['options' => [
                                    'enctype' => 'multipart/form-data',
                                ]]); ?>
                                <?= $form->field($post, 'title')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($post, 'body')->widget(CKEditor::class, [
                                    'options' => ['rows' => 6],
                                    'preset' => 'basic'
                                ]) ?>
                                <?= $form->field($post, 'image_url')->fileInput() ?>
                                <?= $form->field($post, 'status')->checkbox() ?>

                                <button class="btn btn-primary">Save</button>
                                <?php ActiveForm::end(); ?>
                            </fieldset>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->registerJs("$(document).ready(function(){

$('.summernote').summernote();

$('.input-group.date').datepicker({
    todayBtn: 'linked',
    keyboardNavigation: false,
    forceParse: false,
    calendarWeeks: true,
    autoclose: true
});

});") ?>