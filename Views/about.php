<?php

use Models\AboutForm;

/**
 * @var AboutForm $aboutForm
 * @var string    $title
 */

?>
<h1><?= $title ?></h1>

<?= $aboutForm->name ?>
<?= $aboutForm->name ?>
<?= $aboutForm->name ?>
<?= $aboutForm->name ?>
<?= $aboutForm->name ?>
<?= $aboutForm->name ?>
<?= $aboutForm->name ?>
<?= $aboutForm->name ?>

<?php
foreach ($products as $product) {
    View::render('', ['product' => $product]);
}

