<?php
/*
 *  This code is written by mjomban des&dev
 * Restrictions are limited to the license specified in the License.txt file
 * The deveper in the making.
 */

use backend\assets\DashboardAssets;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

DashboardAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>


        <?php $this->beginBody() ?>
        <div class="login-page">
            <div class="login-main">  	
                <div class="login-head">
                    <h1>Login</h1>
                </div>
                <div class="login-block">

                    <?= $content ?>
                </div>
            </div>
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
