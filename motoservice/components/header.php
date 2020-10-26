<?php
  session_start();
?>

<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://use.fontawesome.com/19d57acb65.css" media="all" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href='style.css'>
    
    <title><?php echo $title; ?></title>
  
  </head>
  <body> 
  <nav class="navbar navbar-expand-lg fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="index.php #aboutas">О нас <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php #pricemoto">Услуги и цены</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php #contact">Контакты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="reg.php">Регистрация</a>
        </li>
        </ul>
        <a class="nav-item nav-link" href="lk.php">Личный кабинет</a>
        <?php if ($_SESSION['isAdmin'] == 1): ?> 
          <a class="nav-item nav-link" href="admin.php">Панель администратора</a>
        <?php endif;?>
    </div>
        <?php if(isset($_SESSION['id'])): ?> 
          <a href="exit.php" class="btn btn-primary">Выйти</a>
        <?php else: ?>
          <a href="auth.php" class="btn btn-primary">Войти</a>
        <?php endif; ?>
    </nav>
