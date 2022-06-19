<?php
use API\Core\Render\PHPRender;
/**@var $renderer PHPRender */
/**@var $params array */
?>

<?= $renderer->render('layout/header')  ?>
<div class="sectionSeparator"></div>
<div class="title">Site Root<small><strong><?=$params['appName']?></strong><span style="color: crimson;font-weight: bolder">PHP</span> SandBox </small></div>
<hr style="border-bottom: solid 1px orangered">
<div class="row">
    <div class="col-4">
        <h4>{{ bolder(Lorem) }}</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid amet consequuntur delectus dolor doloribus, enim magnam magni nihil nulla, numquam porro praesentium quis quo, ullam. Atque dicta quaerat sunt.</p>
        <img src="{{ asset(images/mvc_small.jpg)}}" alt="" class="img-fluid">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid amet consequuntur delectus dolor doloribus, enim magnam magni nihil nulla, numquam porro praesentium quis quo, ullam. Atque dicta quaerat sunt.</p>
    </div>
    <div class="col-4">
                <h4>Lorem</h4>
        <p>Lorem ipsum dolor sit amet,  {{ bolder(consectetur adipisicing elit) }}. Ad aliquid amet consequuntur delectus dolor doloribus, enim magnam magni nihil nulla, numquam porro praesentium quis quo, ullam. Atque dicta quaerat sunt.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid amet consequuntur delectus dolor doloribus, enim magnam magni nihil nulla, numquam porro praesentium quis quo, ullam. Atque dicta quaerat sunt.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid amet consequuntur delectus dolor doloribus, enim magnam magni nihil nulla, numquam  {{ bolder(consectetur adipgfhf isicing elit) }} quo, ullam. Atque dicta quaerat sunt.</p>

    </div>
    <div class="col-4">
                <h4>Lorem</h4>
        <div style="border: solid 2px black; width: 100%;min-height: 300px; padding: 1rem">
            <?= $renderer->template('template',['title'=> 'Compiled'] )  ?>
        </div>

    </div>
</div>
<div class="sectionSeparator"></div>
<?= $renderer->render('layout/footer')  ?>
