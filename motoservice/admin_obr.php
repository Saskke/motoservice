<?
session_start();
require_once("components/db.php");

if(!isset($_SESSION['id']) || $_SESSION['isAdmin'] == 0) { // проверили этой командой есть ли у него ID (команда дословно не установлен ID), то есть вошел ли он вообще и (и это либо or или ||) админ ли он. если значение админ =0
    header("Location: lk.php"); //тогда при несоблюдении условий его кидает на эту страницу
}

$deleteID = $_GET['id'];

if (!isset($deleteID) || $deleteID == 0) { // Если будет пустое поле ID или ID будет равно 0 тогда выдаст сообщение Неккоректный ID
    exit("Некорректный ID");
}

$result =$mysqli->query("SELECT * FROM `users` WHERE `id` = '$deleteID'")->fetch_assoc(); 
if (!isset($result) || $result['isAdmin'] == 1) { // проверили выше командой все строки и дальше задали условия что если нет результа, то есть пользователя, или строка в SQL isAdmin у пользователя 1 (то есть он админ) тогда выдается сообщение ниже
    exit("Некорректный ID");
}

$result = $mysqli->query("DELETE FROM `users` WHERE `id`='$deleteID'"); //КОМАНДА ИМЕННО ДЛЯ УДАЛЕНИЯ ПОЛЬЗОВАТЕЛЯ ИЗ БАЗЫ ДАННЫХ. ПРИ УСПЕХЕ КИДАЕТ НА ADMIN.PHP ПРИ ОШИБКЕ СООБЩЕНИЕ
if($result) {
    header("Location: admin.php");
} else {
    exit("Не удалось удалить пользователя");
}