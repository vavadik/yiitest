<?php

class UserTest extends WebTestCase {
    public $fixtures = array(
        'users' => 'User',
    );

    public function testRegister() {
        $this->open('register');
        $userForm = new UserForm;
        $this->assertTextPresent($userForm->getAttributeLabel('login'));
        $this->assertTextPresent($userForm->getAttributeLabel('password'));
        $this->assertTextPresent($userForm->getAttributeLabel('repeatPassword'));
        $this->type('UserForm[login]', 'functestuser1');
        $this->type('UserForm[password]', '1234');
        $this->type('UserForm[repeatPassword]', '1234');
        $this->click('yt0');
        $this->waitForPageToLoad('30000');
        $this->assertTextPresent('index page');
    }

    public function testRegisterFormValidation() {
        $this->open('register');

        // Login
        $this->assertTextNotPresent('Login cannot be blank.');
        $this->type('UserForm[login]', 's');
        $this->type('UserForm[login]', '');
        $this->waitForTextPresent('Login cannot be blank.');
        $this->type('UserForm[login]', '123');
        $this->waitForTextNotPresent('Login cannot be blank.');
        $this->waitForTextPresent('Login is too short');
        $this->type('UserForm[login]', '1234');
        $this->waitForTextNotPresent('Login is too short');

        // Password
        $this->assertTextNotPresent('Password cannot be blank.');
        $this->type('UserForm[password]', 's');
        $this->type('UserForm[password]', '');
        $this->waitForTextPresent('Password cannot be blank.');
        $this->type('UserForm[password]', '123');
        $this->waitForTextNotPresent('Password cannot be blank.');
        $this->waitForTextPresent('Password is too short');
        $this->type('UserForm[password]', '1234');
        $this->waitForTextNotPresent('Password is too short');

        // Repeat password
        $this->assertTextNotPresent('Repeat password cannot be blank.');
        $this->type('UserForm[repeatPassword]', 's');
        $this->type('UserForm[repeatPassword]', '');
        $this->waitForTextPresent('Repeat password cannot be blank.');
        $this->type('UserForm[repeatPassword]', '123');
        $this->waitForTextNotPresent('Password cannot be blank.');
        $this->waitForTextPresent('Repeat password must be repeated exactly.');
        $this->type('UserForm[repeatPassword]', '1234');
        $this->waitForTextNotPresent('Repeat password must be repeated exactly.');
    }

    public function testLogin() {
        $this->open('login');
        $this->assertTextPresent('Login page');
        $this->type('UserForm[login]', 'functestuser1');
        $this->type('UserForm[password]', '123');
        $this->click('yt0');
        $this->waitForPageToLoad('30000');
        $this->assertTextPresent('Wrong login or password!');
        $this->type('UserForm[login]', 'sampleuser1');
        $this->type('UserForm[password]', '1234');
        $this->click('yt0');
        $this->waitForPageToLoad('30000');
        $this->assertTextPresent('index page');
    }
} 