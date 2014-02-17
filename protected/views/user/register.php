<?php
/* @var $model UserForm */
/* @var $this UserController */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget(
    'CActiveForm', array(
        'id' => 'user-form',
        'enableAjaxValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
            'validateOnChange' => true,
            'validateOnType' => false,
        ),
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
    )
);
?>
    <div class="form">
        <div class="row">
            <?= $form->labelEx($model, 'login') ?>
            <?= $form->textField($model, 'login') ?>
            <?= $form->error($model, 'login') ?>
        </div>
        <div class="row">
            <?= $form->labelEx($model, 'password') ?>
            <?= $form->passwordField($model, 'password') ?>
            <?= $form->error($model, 'password') ?>
        </div>
        <div class="row">
            <?= $form->labelEx($model, 'repeatPassword') ?>
            <?= $form->passwordField($model, 'repeatPassword') ?>
            <?= $form->error($model, 'repeatPassword') ?>
        </div>
        <div class="row">
            <?= CHtml::submitButton('Register') ?>
        </div>
    </div>
<?php $this->endWidget(); ?>