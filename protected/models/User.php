<?php

class User extends CActiveRecord {
    public $password;

    public function beforeSave() {
        if (!empty($this->password)) {
            $this->crypted_password = $this->hashPassword($this->password);
        }
        return true;
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'users';
    }

    public function rules() {
        return array(
            array('login', 'required'),
            array('crypt_password', 'required', 'except' => 'create'),
            array('login', 'length', 'min' => 4, 'max' => 40),
            array('password', 'length', 'min' => 4, 'max' => 40, 'on' => 'create'),
            array('password', 'required', 'on' => 'create'),
        );
    }

    public function validatePassword($pass) {
        return CPasswordHelper::verifyPassword($pass, $this->crypted_password);
    }

    public function hashPassword($pass) {
        return CPasswordHelper::hashPassword($pass);
    }
}