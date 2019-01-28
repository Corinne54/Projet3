<?php $title = 'Mon blog'; ?>


<?php ob_start(); ?>

<h1>Mon super blog !</h1>

<p>Derniers billets du blog :</p>


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
<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>
<a href="/index.php?name=Corinne&action=hello">hello</a>
