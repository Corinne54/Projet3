<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8', 'Corinne', 'coco');
        return $db;
    }
}