<?php
use API\Core\Render\PHPRender;
/**@var $renderer PHPRender */
/**@var $params array */
?>
<?= $renderer->render('layout/header')  ?>
<div class="sectionSeparator"></div>
<div class="err">
    <hr>
    Failed URL: <strong style="color: crimson"><?= $params['ip']  ?></strong>
</div>
<?= $renderer->render('layout/footer')  ?>
