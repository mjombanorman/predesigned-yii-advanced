<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\ThemeAssets;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

ThemeAssets::register($this);
?>
<?php
if (Yii::$app->controller->action->id === 'login') {
    /**
     * Do not use this code in your template. Remove it. 
     * Instead, use the code  $this->layout = '//main-login'; in your controller.
     */
    echo $this->render(
            'main-form', ['content' => $content]
    );
} else {
    ?>

    <?php $this->beginPage()
    ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
        <head>
            <meta charset="<?= Yii::$app->charset ?>"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?= Html::csrfMetaTags() ?>
            <?php $this->title = "Application Layout"; ?>
            <title><?= Html::encode($this->title) ?></title>
            <?php $this->head() ?>
            <style type="text/css">
                .jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
        </head>
        <body class="mini-sidebar">	
            <?php $this->beginBody() ?>
            <div id="wrapper">
                <?= $this->render('header.php') ?>
                <?= $this->render('left.php') ?>
                <?= $this->render('content.php', ['content' => $content]) ?>
            </div>

            <?php $this->endBody() ?>
        </body>
    </html>
    <?php
    $this->endPage();
}
?>
                    