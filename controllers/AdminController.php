<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AdminController extends Controller
{


    public function actionAdmin()
    {
        $filename = __DIR__ . '/../settings';
        if (!file_exists($filename)) {
            return $this->redirect(['main/create-settings']);
        }
        if (Yii::$app->request->post()) {
            $settings = [
                'firstCircle' => [
                    'center' => [
                        'oX' => Yii::$app->request->post('firstOx'),
                        'oY' => Yii::$app->request->post('firstOy')
                    ],
                    'radius' => Yii::$app->request->post('firstRadius'),
                    'initialColor' => Yii::$app->request->post('firstInitialColor'),
                    'colorOnClick' => Yii::$app->request->post('firstColorOnClick'),
                    'message' => Yii::$app->request->post('firstMessage')
                ],
                'secondCircle' => [
                    'center' => [
                        'oX' => Yii::$app->request->post('secondOx'),
                        'oY' => Yii::$app->request->post('secondOy')
                    ],
                    'radius' => Yii::$app->request->post('secondRadius'),
                    'initialColor' => Yii::$app->request->post('secondInitialColor'),
                    'colorOnClick' => Yii::$app->request->post('secondColorOnClick'),
                    'message' => Yii::$app->request->post('secondMessage')
                ],
            ];
            $settings = json_encode($settings);
            file_put_contents($filename, $settings);
        }
        $settings = file_get_contents($filename);
        $settings = json_decode($settings);
        return $this->render('admin', [
            'settings' => $settings,
        ]);
    }
}