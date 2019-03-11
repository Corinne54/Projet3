<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>

Ajouter un chapitre

<p>
    Mon email:
</p>
<?=$_SESSION['email']; ?>

<!-- FORMULAIRE AJOUT ARTICLE -->
<form action="index.php?action=addPost" method="post">
    <p>
        <!-- Titre de l'article -->
        <label for="title">Entrez votre titre :</label>
        <input type="text" name="title" required>
    </p>
    <!-- Contenu de l'article -->
    <textarea name="content" id="content"></textarea>
    <!-- Bouton d'envoi -->

    <button type="submit">Publier</button>
</form>



    <?php $content = ob_get_clean(); ?>
    <?php require('view/templateAdmin.php'); ?>
