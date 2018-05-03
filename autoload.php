<?php

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

//function myAutoloaderForInterface($className)
//{
//    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
//
//    $filePath = $className . '.class.php';
//    $filePathtoInterface = $className . '.php';
//
//    if (file_exists($filePath)) {
//        include "$filePath";
//    } elseif (file_exists($filePathtoInterface)) {
//        include "$filePathtoInterface";
//    }  else {
//        die("Класс $className не существует");
//    }
//}

spl_autoload_register('myAutoloader');
spl_autoload_register('myAutoloader'); //второй раз для загрузки интерфейса
//spl_autoload_register('myAutoloaderForInterface');