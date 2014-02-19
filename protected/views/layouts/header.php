<?php
/**
 * @var $this Controller
 */
?>

<div class="header">
    <a href="<?= Yii::app()->createAbsoluteUrl('/') ?>">Index</a><br/>
    <?php if (Yii::app()->user->isGuest): ?>
        <a href="<?= Yii::app()->createAbsoluteUrl('/login') ?>">Login</a><br/>
        <a href="<?= Yii::app()->createAbsoluteUrl('/register') ?>">Register</a><br/>
    <?php else: ?>
        <a href="<?= Yii::app()->createAbsoluteUrl('/logout') ?>">Logout</a><br/>
    <?php endif ?>
</div>