<?php
use yii\helpers\Html;
/**
 * @var $content
 */

?>
<?php $this->beginPage() ?>
    <!DОСТУРЕ html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <style>
            * { margin:0; padding:0; }

            html, body { width:100%; height:100%; }

            canvas { display:block; }
        </style>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="container">
        <?= $content ?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>