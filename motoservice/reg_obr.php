<?php
header('Content-Type: text/html; charset=utf-8');

$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$marka = $_POST['marka'];
$model = $_POST['model'];
$year = $_POST['year'];

$login = trim($login);  
$password = trim($password);
$name = trim($name);
$lastname = trim($lastname);
$marka = trim($marka);
$model= trim($model);
$year = trim($year);

$login = htmlspecialchars($login); 
$password = htmlspecialchars($password);
$name = htmlspecialchars($name);
$lastname = htmlspecialchars($lastname);
$marka = htmlspecialchars($marka);
$model = htmlspecialchars($model);
$year = htmlspecialchars($year);

if (empty($login) || empty($password) || empty($name) || empty($lastname) || empty($marka) || empty($model) || empty($year)) {
  exit("Не все поля заполнены");
}  

require_once("components/db.php"); 

$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'"); 
$result = $result->fetch_assoc(); 

if(isset($result)) { 
  exit("Такой пользователь уже существует!"); 
} 

$password = password_hash($password, PASSWORD_BCRYPT); 


$result = $mysqli->query("INSERT INTO `users`(`login`, `password`, `name`, `lastname`, `marka`, `model`, `year`) VALUES ('$login', '$password', '$name', '$lastname', '$marka', '$model', '$year')");

if($result) {
  exit("пользователь $login успешно добавлен");
} else {
  exit ("Не удалось добавить пользователя");
} 
