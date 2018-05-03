<?php

require_once "interfaces/interface.php";

function myAutoloader($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    $filePath = $className . '.class.php';
    $filePathtoInterface = $className . '.php';

    if (file_exists($filePath)) {
        include "$filePath";
    } elseif (file_exists($filePathtoInterface)) {
        include "$filePathtoInterface";
    }  else {
    die("Класс $className не существует");
    }
}

function MyAutoloaderForInterface($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    $filePath = $className . '.class.php';
    $filePathtoInterface = $className . '.php';

    if (file_exists($filePath)) {
        include "$filePath";
    } elseif (file_exists($filePathtoInterface)) {
        include "$filePathtoInterface";
    }  else {
        die("Класс $className не существует");
    }
}

spl_autoload_register('MyAutoloader');
spl_autoload_register('MyAutoloaderForInterface');