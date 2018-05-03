<?php
/**
 *
 * Пространство имен - это как структура хранилища, созданная для групирования классов, интнрфейсов, функций и константы.
 * На примере это позволяет использовать функции с одникаковым названием, но разным действием
 *
 * Исключения - это спецыальные условия, которые позволяют контролировать нестандартные процессы и управлять ними для
 * избежания неконтролированого завершения процесса. На пример можно конролировать запросы и изменения к приватным
 * свойствам...
 *
 */

namespace MySuperClass;
namespace Classes;
namespace Interfaces;

require_once "interfaces/interface.php";
require_once 'classes/MySuperClass.php';
require_once 'classes/classes.php';

//------------------------------------- Objects---------------------------------------------
//----------------CAR----------------
$bmw = new CarClass('BMW', '10', 700);
$bmw->changeColor('Blue');

$audi = new CarClass('AUDI', '10', 900);

//----------------TV-----------------
$lg = new TV('LG', '', 500);
$lg->diagonal = 42;

$sone = new TV('SONE', '10', 700);
$sone->diagonal = 80;

//----------------PEN-----------------
$parker = new BallPen('Parker', '10', 20);
$parker->color = 'Black';

$space_pen = new BallPen('Space Pen', 'Black', 70);
$space_pen->color = 'Black';

//----------------Duck-----------------
$american_pekin = new Duck('American Pekin', 10, 10);

$american_black_duck = new Duck('American black duck', '10', 11);
$american_black_duck->changeColor('Black');

//----------------Product-----------------
$cup = new Product('White cup', '10', 10);
$cup->category('Cups');

$book = new Product('Health', '10', 8);
$book->category('Books');


//-----------------------------------Echo------------------------------------------------------
echo "<h2>Car</h2>";
echo "<pre>";
print_r($bmw);
echo "Price for " . "$bmw->name: " . $bmw->getPrice() . "<br><br><br>";

print_r($audi);
echo "Price for " . "$audi->name: " . $audi->getPrice() . "<br><br><br>";

//------------TV--------------
echo "<h2>TV</h2>";
print_r($lg);
echo "Price for " . "$lg->name: " . $lg->getPrice() . "<br><br><br>";

print_r($sone);
echo "Price for " . "$sone->name: " . $sone->getPrice() . "<br>";

//------------Product--------------
echo "<h2>Product</h2>";
print_r($cup);
echo "Price for " . "$cup->name: " . $cup->getPrice() . "<br><br><br>";

print_r($book);
echo "Price for " . "$book->name: " . $book->getPrice() . "<br>";



