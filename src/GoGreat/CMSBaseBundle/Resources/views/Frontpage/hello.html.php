<?php $view->extend('CMSBase::layout.html.php') ?>

Hello, <?php echo $name ?>

<?php $view['slots']->start('_title') ?>
Hello World Example
<?php $view['slots']->stop() ?>