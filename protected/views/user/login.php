<h3>Login page</h3>

<div class="form">
    <?= CHtml::beginForm() ?>
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
        <?= CHtml::submitButton('Login') ?>
    </div>
    <? CHtml::endForm() ?>
</div>