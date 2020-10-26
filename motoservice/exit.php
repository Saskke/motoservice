<?php
session_start();
session_destroy();

header("Location: auth.php"); //перенаправляем на другую страницу
//Такое перенаправление возможно только если страница пуста, то есть нет HTML кода или echo.
