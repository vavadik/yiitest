<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 19.02.14
 * Time: 11:07
 * @var $this UserController
 * @var $data CActiveDataProvider
 */
?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $data,
    'columns' => array(
        'id',
        'login',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}',
            'buttons' => array(
                'view' => array(
                    'url' => 'Yii::app()->createUrl("user", array($data["login"] => ""))',
                ),
            ),
        ),
    ),
));
?>