<?php
/* @var $model UserForm */
/* @var $this UserController */
?>

<div class="form">
    <?= CHtml::beginForm(); ?>
    <?= CHtml::errorSummary($model) ?>
    <div class="row">
        <?= CHtml::activeLabel($model, 'login') ?>
        <?= CHtml::activeTelField($model, 'login') ?>
    </div>
    <div class="row">
        <?= CHtml::activeLabel($model, 'password') ?>
        <?= CHtml::activePasswordField($model, 'password') ?>
    </div>
    <div class="row">
        <?= CHtml::activeLabel($model, 'repeatPassword') ?>
        <?= CHtml::activePasswordField($model, 'repeatPassword') ?>
    </div>
    <div class="row">
        <?= CHtml::submitButton('Register') ?>
    </div>
    <?= CHtml::endForm(); ?>
</div>