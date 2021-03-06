<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<?= $this->renderPartial('/layouts/header') ?>
<div class="container" id="page">
    <?php $this->widget('ext.leftside.LeftSide', array('structure' => $this->leftside)) ?>
    <?php echo $content; ?>
</div>
</body>
</html>
