<?php

class UserForm extends CFormModel {
    public $login;
    public $password;
    public $repeatPassword;
    public $rememberMe = false;

    private $_identity;

    public function rules() {
        return array(
            array('login, password', 'required'),
            array('password, login', 'length', 'min' => 4, 'max' => 40),
            array('repeatPassword', 'required', 'on' => 'register'),
            array('password', 'compare', 'compareAttribute' => 'repeatPassword', 'on' => 'register'),
            array('rememberMe', 'boolean', 'on' => 'login'),
            array('password', 'authenticate', 'on' => 'login'),
        );
    }

    public function authenticate($attribute, $params) {
        $this->_identity = new UserIdentity($this->login, $this->password);
        if (!$this->_identity->authenticate()) {
            $this->addError('password', 'Wrong login or password!');
        }
    }

    public function attributeLabels() {
        return array(
            'login' => 'Login',
            'password' => 'Password',
            'repeatPassword' => 'Repeat password',
            'rememberMe' => 'Remember me',
        );
    }
}