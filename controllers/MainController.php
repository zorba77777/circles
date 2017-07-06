<?php

namespace app\controllers;

use yii\web\Controller;

class MainController extends Controller
{
    public function actionIndex()
    {
        $filename = __DIR__ . '/../settings';
        if (!file_exists($filename)) {
            return $this->redirect(['main/create-settings']);
        }
        $settings = file_get_contents($filename);
        return $this->render('index', [
            'settings' => $settings,
        ]);
    }

    public function actionCreateSettings()
    {
        $filename = __DIR__ . '/../settings';
        touch($filename);
        $settings = [
            'firstCircle' => [
                'center' => [
                    'oX' => 50,
                    'oY' => 50
                ],
                'radius' => 30,
                'initialColor' => 'red',
                'colorOnClick' => 'green',
                'message' => 'Message'
            ],
            'secondCircle' => [
                'center' => [
                    'oX' => 100,
                    'oY' => 100
                ],
                'radius' => 30,
                'initialColor' => 'yellow',
                'colorOnClick' => 'orange',
                'message' => 'Message'
            ],
        ];
        $settings = json_encode($settings);
        file_put_contents($filename, $settings);
        $this->redirect(['main/index']);
    }
}