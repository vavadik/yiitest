<?php

/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 19.02.14
 * Time: 16:44
 */
class LeftSide extends CWidget {
    public $structure = array();

    public function init() {

    }

    public function run() {
        $this->render('ext.leftside.view.leftside', array('structure' => $this->structure));
    }
}