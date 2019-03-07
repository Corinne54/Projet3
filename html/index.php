<?php
session_start();
//$_SESSION['message_flash'] = "Tu es bien connecté"

require('controller/frontend.php');
require('controller/backend.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listposts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'login') {


            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                login($_POST['email'], $_POST['password']);
            }
       // if(isset($_SESSION['message_flash'])) {
// on affiche le message et on supprime la variable du tableau pour que ça n'affiche le message qu'une seule fois
       // }

            else {
                login("","");
            }


    }

    elseif ($_GET['action'] == 'addPost') {

            if (!empty($_TITLE['title']) && !empty($_CONTENT['content'])) {
                addPost($_POST['title'], $_POST['content']);
            }

        }



 if ($_GET['action']=='admin') {

     admin();
 }


    if ($_GET['action']=='logout') {

        logout();
    }

    elseif ($_GET['action'] == 'hello' && isset($_GET['name'])) {

        hello($_GET['name']);
    }

    if ($_GET['action']=='addpostform') {
        addpostform();
    }
}


else {
    listPosts();
}