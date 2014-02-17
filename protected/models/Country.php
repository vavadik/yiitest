<?php

class Country extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'net_country';
    }

    public function relations() {
        return array(
            'cities' => array(self::HAS_MANY, 'City', 'country_id'),
        );
    }

}