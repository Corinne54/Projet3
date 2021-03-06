<?php $title = 'Mon blog'; ?>


<?php ob_start(); ?>

<h1>Le blog de Jean Forteroche</h1>

<p><h4>Découvrez les derniers chapitres :</h4></p>


<?php
while ($data = $posts->fetch())
{
    ?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="/index.php?id=<?= $data['id'] ?>&action=post">Commentaires</a></em>
        </p>
    </div>
    <?php
}
$posts->closeCursor();
?>

<a href="/index.php?action=hello">Hello</a>
<?php $content = ob_get_clean(); ?>


<?php require('view/template.php'); ?>

