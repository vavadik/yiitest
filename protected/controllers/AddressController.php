<?php

class AddressController extends Controller {

    public function actionCountries() {
        $countries = Country::model()->findAll();
        $this->render('countries', array('countries' => $countries));
    }

    public function actionCities() {
        $id = Yii::app()->getRequest()->getQuery('id');
        if (empty($id)) {
            die();
        }
        $country = Country::model()->findByPk($id);
        $cities = $country->cities;
        $this->render('cities', array('country_name' => $country->name_ru, 'cities' => $cities));
    }

}