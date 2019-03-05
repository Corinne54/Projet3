<?php

require_once("model/Manager.php");


class UserManager extends Manager
{
    function login($email, $password)
    {
        $db = $this->dbConnect();
        $user = $db->prepare('SELECT * FROM `member` WHERE `email`= ? AND `password`= ? ');
        $user->execute(array($email, $password));

        return $user->fetch();



    }

    function findByName($name)
    {
        $db = $this->dbConnect();
        $user = $db->prepare('SELECT * FROM `member` WHERE name LIKE ? ');
        $user->execute(array($name.'%'));

        return $user->fetch();
    }
}

