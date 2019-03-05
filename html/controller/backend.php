<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

function admin ()
{
    if (!isset($_SESSION['email']))
    header('Location: index.php');

    require('view/backend/adminView.php');

}

function logout ()
{
    session_destroy();
    header('Location: index.php');

}

function addpostform ()
{

    require('view/backend/addPostView.php');

}

function addPost($title, $content, $creation_date)

{

    $postManager = new PostManager();


    $affectedLines = $postManager->addPost($title, $content, $creation_date);


    if ($affectedLines === false) {

        throw new Exception('Impossible d\'ajouter le chapitre !');

    } else {

        header('Location: index.php');

    }
}