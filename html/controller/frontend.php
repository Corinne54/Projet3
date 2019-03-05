<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}


function addComment($postId, $author, $comment)

{

    $commentManager = new CommentManager();


    $affectedLines = $commentManager->postComment($postId, $author, $comment);


    if ($affectedLines === false) {

        throw new Exception('Impossible d\'ajouter le commentaire !');

    } else {

        header('Location: index.php?action=post&id=' . $postId);

    }
}
function login($email, $password)
{
  //si déjà loggé, redirection
    if (isset ($_SESSION['email']))
      header('Location: index.php?action=admin');

    if (isset ($_POST['email'])&&( isset($_POST['password']))) {
        $userManager = new UserManager();
        $user = $userManager->login($email, $password);

//var_dump($user);

        //ajout de l'utilisateur en session
        if ($user)
        {
            $_SESSION['email'] = $user['email'];
            header('Location: index.php?action=admin');

        }

    }

//si pas loggé, affiche loginView
    require('view/frontend/loginView.php');
}


function hello($name)
{
    $userManager= new UserManager();
    $name=$userManager->findbyname($name);

    var_dump($name);
    require('view/frontend/helloView.php');
}




