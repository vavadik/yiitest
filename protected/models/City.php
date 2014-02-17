<?php

class City extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'net_city';
    }

    public function relations() {
        return array(
            'country' => array(self::BELONGS_TO, 'Country', 'country_id'),
        );
    }

}