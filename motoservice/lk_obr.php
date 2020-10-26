<? //можно сокращенно так открывать PHP
session_start(); //Запускаем сессию что бы вытаскивать оттуда ID
require_once("components/db.php");
$userID = $_SESSION['id'];

foreach($_POST as $key=>$value) { // написали функции о том, что $key это текущее значение в базе, $value новое значение
    changeData($key, $value);
}

function changeData($columnKey, $newValue) { //написали скрипт что бы менять данные в анкете пользователя
    global $userID, $mysqli;

    if ($columnKey == "login" || $columnKey == "password" || $columnKey == "id") { //Этой функцией мы убрали брешь, что бы через консоль не изменили логин, пароль или ID
        exit("Нельзя изменить эти данные");
    }

    $result = $mysqli->query("UPDATE `users` SET `$columnKey`='$newValue' WHERE `id`='$userID'"); //строку взяли из SQL в разделе SQL выбрали UPDETE
    if($result) {
        $_SESSION[$columnKey] = $newValue;
        exit("Изменения внесены <script>window.location.href='lk.php'</script>"); //Прописали через js что бы сразу возвращало назад в анкету
    } else {
        exit("Не удалось изменить данные");
    }
}