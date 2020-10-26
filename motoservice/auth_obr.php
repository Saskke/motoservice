<?php 
session_start(); 
header('Content-Type: text/html; charset=utf-8');

$login = $_POST['login'];
$password = $_POST['password'];

$login = htmlspecialchars( trim($login) );
$password = htmlspecialchars( trim($password) );


require_once("components/db.php"); 

//echo "$login | $password";
if ($mysqli->connect_error) {
    die("Не удалось подключиться к БД ".$mysqli->connect_error);
}

if(empty($login) || empty($password)) {
    exit("Не все поля заполнены"); 
}

$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'")->fetch_assoc();

if(isset($result) && password_verify($password, $result['password'])) {

$_SESSION['id'] = $result['id']; 
$_SESSION['login'] = $result['login'];
$_SESSION['name'] = $result['name'];
$_SESSION['lastname'] = $result['lastname'];
$_SESSION['marka'] = $result['marka'];
$_SESSION['model'] = $result['model'];
$_SESSION['year'] = $result['year'];
$_SESSION['isAdmin'] = $result['isAdmin'];

//echo "Пользователь успешно вошел!";
exit("<script>window.location.href = 'lk.php'</script>"); //перенаправление на другую страницу
} else { 
    exit("Неверный логин или пароль!");
}




//exit(var_dump($result)); //проверка, выводит массив
//var_damp и echo удаляем, чтоб потом не мешали

