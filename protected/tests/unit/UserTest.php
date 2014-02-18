<?php

class UserTest extends CDbTestCase {
    public $fixtures = array(
        'users' => 'User',
    );

    public function testCreate() {
        $user = new User('create');
        $username = 'testuser1';
        $password = '1234';
        $user->setAttributes(array(
            'login' => $username,
            'password' => $password,
        ));
        $this->assertTrue($user->save());
        $identity = new UserIdentity($username, $password);
        $this->assertTrue($identity->authenticate());
    }
}