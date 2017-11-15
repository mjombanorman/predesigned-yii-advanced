<?php

use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
?>
<!-- ===== Page-Content ===== -->
<div class="page-wrapper" style="min-height: 582px;">

    <div class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

</div>
<!-- ===== Page-Container-End ===== -->
<footer class="footer t-a-c">
    &copy; My Company <?= date('Y') ?>.All Rights Reserved.
</footer>
</div>
<!-- ===== Page-Content-End ===== -->
<div class="col-md-9">

</div>



