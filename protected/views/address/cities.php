Cities for <?= $country_name ?>:<br/><br/>
<?php foreach ($cities as $city): ?>
    <?= $city->name_ru ?><br/>
<?php endforeach; ?>