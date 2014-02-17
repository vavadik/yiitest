<?php

class UserController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionNew() {
        $this->render('new');
    }

    public function actionRegister() {
        $formModel = new UserForm('register');
        $this->performAjaxValidation($formModel);
        if (isset($_POST['UserForm'])) {
            $formModel->attributes = $_POST['UserForm'];
            if ($formModel->validate()) {
                $userModel = new User('create');
                $userModel->attributes = $_POST['UserForm'];
                if ($userModel->save()) {
                    $this->redirect(Yii::app()->user->returnUrl);
                }
            }
        }
        $this->render('register', array('model' => $formModel));
    }

    public function actionLogin() {
        $formModel = new UserForm('login');
        if (isset($_POST['UserForm'])) {
            $formModel->attributes = $_POST['UserForm'];
            if ($formModel->validate()) {
                $this->redirect('/');
            }
        }
        $this->render('login', array('model' => $formModel));
    }

    /**
     * Performs the AJAX validation.
     * @param User $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}