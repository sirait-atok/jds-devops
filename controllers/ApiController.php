<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ApiController extends Controller
{
    /**
     * {@inheritdoc}
     */
    // public function behaviors()
    // {
        // return [
            // 'access' => [
                // 'class' => AccessControl::className(),
                // 'only' => ['logout'],
                // 'rules' => [
                    // [
                        // 'actions' => ['logout'],
                        // 'allow' => true,
                        // 'roles' => ['@'],
                    // ],
                // ],
            // ],
            // 'verbs' => [
                // 'class' => VerbFilter::className(),
                // 'actions' => [
                    // 'logout' => ['post'],
                // ],
            // ],
        // ];
    // }

    // /**
     // * {@inheritdoc}
     // */
    // public function actions()
    // {
        // return [
            // 'error' => [
                // 'class' => 'yii\web\ErrorAction',
            // ],
            // 'captcha' => [
                // 'class' => 'yii\captcha\CaptchaAction',
                // 'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            // ],
        // ];
    // }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // return $this->render('index');
		$ip = $_SERVER["REMOTE_ADDR"];
		if(isset($_SERVER["HTTP_CF_CONNECTING_IP"]) && $_SERVER["HTTP_CF_CONNECTING_IP"]){ $ip = $_SERVER["HTTP_CF_CONNECTING_IP"]; }
		if(isset($_SERVER["HTTP_X_FORWARDED_FOR"]) && $_SERVER["HTTP_X_FORWARDED_FOR"]){ $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; }

		$response = array(
			"response_status" => "success",
			"response_date" => date("Y-m-d H:i:s"),
			"ip_address" => $ip
		);

		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($response);exit;
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    // public function actionLogin()
    // {
        // if (!Yii::$app->user->isGuest) {
            // return $this->goHome();
        // }

        // $model = new LoginForm();
        // if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // return $this->goBack();
        // }

        // $model->password = '';
        // return $this->render('login', [
            // 'model' => $model,
        // ]);
    // }

    // /**
     // * Logout action.
     // *
     // * @return Response
     // */
    // public function actionLogout()
    // {
        // Yii::$app->user->logout();

        // return $this->goHome();
    // }

    // /**
     // * Displays contact page.
     // *
     // * @return Response|string
     // */
    // public function actionContact()
    // {
        // $model = new ContactForm();
        // if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            // Yii::$app->session->setFlash('contactFormSubmitted');

            // return $this->refresh();
        // }
        // return $this->render('contact', [
            // 'model' => $model,
        // ]);
    // }

    // /**
     // * Displays about page.
     // *
     // * @return string
     // */
    // public function actionAbout()
    // {
        // return $this->render('about');
    // }
}
