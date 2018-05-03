<?php

require_once "interfaces/interface.php";

function __autoload($className)
{
    $filePath = './classes/' . $className . '.class.php';
    if (file_exists($filePath)) {
        include "$filePath";
    } else {
        die("Класс $className не существует");
    }
}