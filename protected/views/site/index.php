<?php
/* @var $this SiteController */
?>

index page<br/>
Welcome, <?= Yii::app()->user->name ?>!<br/>
<a href="<?= Yii::app()->createUrl('login') ?>">Login</a><br/>
<a href="<?= Yii::app()->createUrl('register') ?>">Register</a>
