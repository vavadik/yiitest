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
                Yii::app()->user->login($formModel->getIdentity());
                $this->redirect('/');
            }
        }
        $this->render('login', array('model' => $formModel));
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->createAbsoluteUrl('/'));
        Yii::app()->end();
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

    public function actionShowAll() {
        $dataProvider = new CActiveDataProvider('User', array(
            'pagination' => array(
                'pageSize' => 2
            ),
        ));
        $this->render('showall', array('data' => $dataProvider));
    }

    public function actionShow($name) {
        $user = User::model()->findByAttributes(array('login' => $name));
        if ($user !== null) {
            $this->render('show', array('name' => $user->login));
        } else {
            $this->render('nouser', array('name' => $name));
        }
    }
}