<?php
header('Content-Type: text/html; charset=utf-8');
//$_GET глобальный массив GET для всех файлов можно использовать данные
//$_POST глобальный массив POST для всех файлов можно использовать данные ЗАВИСИТ ОТ ТИПА ОТПРАУКИ ДАННЫХ html GET ИЛИ POST

$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$marka = $_POST['marka'];
$model = $_POST['model'];
$year = $_POST['year'];


$login = trim($login);  //trim ОБРЕЗАЕТ ЛИШНИЕ ПРОБЕЛЫ, ЧТО БЫ САЙТ НЕ ЛОМАЛИ
$password = trim($password);
$name = trim($name);
$lastname = trim($lastname);
$marka = trim($marka);
$model= trim($model);
$year = trim($year);

$login = htmlspecialchars($login); // htmlspecialchars ПРЕОБРАЗУЕТ СПЕЦ СИМВОЛЫ В HTML СУЩЬНОСТИ, ТО ЕСТЬ НЕ ДАЕТ ВПИСАТЬ КОМАНДЫ. ПРЕОБРАЗУЕТ КОМАНДЫ В ОБЫЧНЫЙ ТЕКСТ
$password = htmlspecialchars($password);
$name = htmlspecialchars($name);
$lastname = htmlspecialchars($lastname);
$marka = htmlspecialchars($marka);
$model = htmlspecialchars($model);
$year = htmlspecialchars($year);

if (empty($login) || empty($password) || empty($name) || empty($lastname) || empty($marka) || empty($model) || empty($year)) {
  exit("Не все поля заполнены");
}  // создали условия прописав каждое поле (empty проверяет пустое поле или нет, || значение и)  если поле пустое применяет команду exit то есть выводит сообщение


require_once("components/db.php"); // подключили базу данны, весь код по подключению в файле который указн в пути.


$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'"); // КОМАНДОЙ ПРОВЕРЯЕМ НЕТ ЛИ ПОЛЬЗОВАТЕЛЯ УЖЕ В БАЗЕ. ТАК ЖЕ БЕРЕМ ЕЁ ИЗ SQL НАЖИМАЯ НА SELECT. * ЭТО ПРОВЕРКА ВСЕХ СТРОК. в этой строке написано проверить все строки в базе users где login новый будет равен login из базы
$result = $result->fetch_assoc(); // Данной командой мы расшифровываем вывод строчки выше, то есть нам напишет при совпадениях каждую строчку, где данные повторились между базой и тем что указали. ЕСЛИ УКАЗАЛИ ВСЕ НОВЫЕ ДАННЫЕ, ТОГДА ВЫДАСТ ЗНАЧЕНИЕ NULL
//exit(var_dump($result)); СТРОКА ПРОВЕРКИ КОДА ВЫШЕ! //ПРОВЕРЯЕТ РАБОТАЕТ ЛИ СТРОКА ВЫШЕ. ЕСЛИ РАБОТАЕТ БУДЕТ ОШИБКА ПО ТИПУ: object(mysqli_result)#2 (5) { ["current_field"]=...

if(isset($result)) { // isset - определяет, была ли установлена переменная значением, отличным от NULL. ТО ЕСТЬ НЕ NULL 
  exit("Такой пользователь уже существует!"); 
} // этой командой, мы проверяем, есть ли пользователь в базе, если есть, то кодом выше выдает НЕ NULL, и исходя из этого условия, выдаст такое сообщение

$password = password_hash($password, PASSWORD_BCRYPT); //КОМАНДА ДЛЯ ШИФРОВАНИЯ ПАРОЛЯ!! В СКОБКАХ ПИШЕМ (ЧТО ШИФРУЕМ, КАКОЙ МЕТОД ШИФРОВАНИЯ). МЕТОД ШИФРОВАНИЯ МОЖНО ЮЗАТЬ ЭТОТ


$result = $mysqli->query("INSERT INTO `users`(`login`, `password`, `name`, `lastname`, `marka`, `model`, `year`) VALUES ('$login', '$password', '$name', '$lastname', '$marka', '$model', '$year')"); //делаем запрос в базу данных этой командой, команду копируем и заполняем из SQL во вкладке SQL жмякая на INSERT
// echo var_dump($result); //отображаем для проверки, если все верно будет true.         ВСЕ SQL ЗАПРОСЫ ДЕЛАЮТСЯ ЧЕРЕЗ query



if($result) {
  exit("пользователь $login успешно добавлен");
} else {
  exit ("Не удалось добавить пользователя");
} 



// echo "$login ! $password ! $name ! $lastname ! $birthday";