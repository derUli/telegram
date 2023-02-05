<?php

$model = ViewBag::get("message");
?>
<?php echo $model->title; ?>

<?php if ($model->description) { ?>
    <?php echo $model->description; ?>
<?php } ?>
<?php echo $model->url; ?>