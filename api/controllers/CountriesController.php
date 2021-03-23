<?php

namespace api\controllers;

use app\helpers\BehaviorsFromParamsHelper;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;
use api\models\Countries;

class CountriesController extends ActiveController
{
    public $enableCsrfValidation = false;

    /**
     * @param $action
     * @return bool
     * @throws yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        parent::beforeAction($action);

        return true;
    }

    public static function allowedDomains()
    {
        return [
            '*',                        // star allows all domains
        ];
    }

    // public function behaviors()
    // {
    //     $behaviors = parent::behaviors();
    //     $behaviors['authenticator'] = [
    //         'class' => CompositeAuth::className(),
    //         'authMethods' => [
    //             HttpBasicAuth::className(),
    //             HttpBearerAuth::className(),
    //             QueryParamAuth::className(),
    //         ],
    //     ];
    //     $behaviors['corsFilter'] = [
    //         'class' => \yii\filters\Cors::className(),
    //     ];
    //     return $behaviors;
    // }


    public $modelClass = 'app\models\Counries';

    public function actions()
    {
        $action = parent::actions(); // TODO: Change the autogenerated stub
        unset($action['index']);
        unset($action['create']);
        unset($action['update']);
        unset($action['delete']);
    }

    public function actionCountrieslist()
    {
        $postdata = file_get_contents("php://input");
        $data = json_decode($postdata, true);
        $countries = Countries::find()->asArray()->all();
        return [
            'countries' => $countries,
        ];
    }

    public function actionCreate()
    {
        $postdata = file_get_contents("php://input");
        $data = json_decode($postdata, true);
        var_dump($data);
    }
}