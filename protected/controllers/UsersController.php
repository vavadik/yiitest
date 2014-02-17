<?php

class UsersController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }
    
    public function actionNew() {
        $this->render('new');
    }

}