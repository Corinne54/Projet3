<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>

Hello Admin

<p>
    Mon email:
</p>
<?=$_SESSION['email']; ?>



    <?php $content = ob_get_clean(); ?>
    <?php require('view/templateAdmin.php'); ?>
