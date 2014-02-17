<?php foreach ($countries as $country): ?>
    <a href="<?= Yii::app()->createUrl('countries', array($country->id => '')) ?>"><?= $country->name_ru ?></a><br/>
<?php endforeach; ?>