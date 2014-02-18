<?php

return array(
    'user1' => array(
        'login' => 'sampleuser1',
        'crypted_password' => CPasswordHelper::hashPassword('1234'),
    ),
    'user2' => array(
        'login' => 'sampleuser2',
        'crypted_password' => CPasswordHelper::hashPassword('4321'),
    ),
    'user3' => array(
        'login' => 'sampleuser3',
        'crypted_password' => CPasswordHelper::hashPassword('3124'),
    ),
);