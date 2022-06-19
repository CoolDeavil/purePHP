<?php
use API\Core\Render\PHPRender;
/**@var $renderer PHPRender */
/**@var $params array */
?>

<?= $renderer->render('layout/header')  ?>
<div class="sectionSeparator"></div>
<div class="row">
    <div class="col-12">
        <div class="title"><?=$params['param']?><small>Just a content Page</small></div>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <h4>Title 1</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. {{ bolder(Ad aliquid amet consequuntur delectus dolor doloribus)}}, enim magnam magni nihil nulla, numquam porro praesentium quis quo, ullam. Atque dicta quaerat sunt.</p>
        <img src="{{ asset(images/default_avatar.png)}}" alt="" class="img-fluid">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid amet consequuntur delectus dolor doloribus, enim magnam magni nihil nulla, numquam porro praesentium quis quo, ullam. Atque dicta quaerat sunt.</p>
    </div>
    <div class="col-4">
                <h4>Title 2</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid amet {{ bolder(consequuntur delectus dolor doloribus)}}, enim magnam magni nihil nulla, numquam porro praesentium quis quo, ullam. Atque dicta quaerat sunt.</p>
        <img src="{{ asset(images/elephant_small.png) }}" alt="" class="img-fluid">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid amet consequuntur delectus dolor doloribus, enim magnam magni nihil nulla, numquam porro praesentium quis quo, ullam. Atque dicta quaerat sunt.</p>

    </div>
    <div class="col-4">
                <h4>Title 3</h4>
        <p>Lorem ipsum dolor sit amet, {{ bolder(consectetur adipisicing elit. Ad aliquid amet conse) }}quuntur delectus dolor doloribus, enim magnam magni nihil nulla, numquam porro praesentium quis quo, ullam. Atque dicta quaerat sunt.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid amet consequuntur delectus dolor doloribus, enim magnam magni nihil nulla, numquam porro praesentium quis quo, ullam. Atque dicta quaerat sunt.</p>

    </div>
</div>
<div class="sectionSeparator"></div>
<?= $renderer->render('layout/footer')  ?>
