<?php
session_start();
if (!isset($_SESSION['id']) or $_SESSION['isAdmin'] == 0) { //сделали условие, при котором проверяется. если у пользователя ID= 0 то есть нет такго и админка = 0, то есть он не админ, его выкидывает
    header("Location: lk.php");
}
$title = "Панель Администратора";
require_once("components/header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <h1>Панель администратора</h1>
        </div>
        <div class="col-6">
        <table border="1">
            <tr>
                <td>ID</td>
                <td>login</td>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Дата рождения</td>
            </tr>

            <?php // КОМАНДА ДЛЯ ОТОБРАЖЕНИЯ ВСЕХ ПОЛЬЗОВАТЕЛЕЙ В АДМИНКЕ
                require_once("components/db.php");
                $result = $mysqli->query("SELECT * FROM `users` WHERE 1"); // * ЭТО ВСЕ 1 ЭТО TRUE В ДАННОМ СЛУЧАЕ
                // $users = [];
                // while($row = $result->fetch_assoc()) { //создали цикл который перебирает до конца, пока не дойдет до значения NULL, НО NULL НЕ ВЫВОДИТ Т.К. В УСЛОВИИ СТОИТ fetch_assoc
                //  $users[] = $row; // Тоже самое как PUSH в js  
                // }
                // var_dump($users);
                for($users = []; $row = $result->fetch_assoc(); $users[] = $row); //Самый лучший цикл из выше представленных, называется волшебный, ЛУЧШЕ ЗАПОМНИТЬ!!
                foreach($users as $user):
            ?>
                <tr>   <!-- написали код по выводу данных ниже по пользователям в админке -->
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['login'] ?></td>
                    <td><?= $user['name'] ?></td>  <!-- < ? =  это сокращенное echo  -->
                    <td><?= $user['lastname'] ?></td>
                    <td><?= $user['birthday'] ?></td>
                    <td class="p-2"><a href="admin_obr.php?id=<?= $user['id'] ?>" class="btn btn-danger">Удалить</a></td> <!-- кнопка удалить в админке|||   В HREF ВПИСАЛИ PHP КОД ЧТО БЫ ОН К КНОПКИ ДОБАВЛЯЛ ИНДИВИДУАЛЬНЫЙ ID ПОЛЬЗОВАТЕЛЯ  ?= ЭТО СОКРАЩЕНИЕ ОТ < ? PHP ECHO -->
                </tr>
                <?php endforeach; ?>
        </table>
        </div>
    </div>
</div>

<?php
require_once("components/footer.php");
?>