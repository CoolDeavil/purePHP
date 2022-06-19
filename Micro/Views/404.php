<?php
use API\Core\Render\PHPRender;
/**@var $renderer PHPRender */
/**@var $params array */
?>
<?= $renderer->render('layout/header')  ?>
<div class="sectionSeparator"></div>
<div class="err"></div>
<?= $renderer->render('layout/footer')  ?>
