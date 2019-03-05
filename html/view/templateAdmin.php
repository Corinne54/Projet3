<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="public/css/style.css" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>




<body>

<div class="bloc_page">

    <!-- HEADER -->

    <header id="header">
        <div class="menuTitle">
            <h1> Billet simple pour l'Alaska</h1>
            <p>Menu d'administration</p>
        </div>




    </header>
    <!-- Menu de navigation -->
    <nav class="navbar navbar-dark bg-dark">
        <a href="index.php"> Accueil</a>
        -
        <a href="index.php?action=addpostform"> Ajouter un chapitre</a>
    </nav>


    <?= $content ?>

    <footer id="footer">
        <a href="index.php?action=logout"> Déconnexion administration</a>

    </footer>
</div>
</body>

</html>