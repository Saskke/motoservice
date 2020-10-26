<?php
session_start();
$title = "Личный кабинет";
require_once("components/header.php");

if (!isset($_SESSION['id'])) {
    exit("<script>window.location.href = 'auth.php'</script>"); 
}
?>

<link rel="stylesheet" href="https://snipp.ru/cdn/jqueryui/1.12.1/jquery-ui.min.css">

<style type="text/css">
input {
	width: 266px;
	display: inline-block;
	padding: 5px;
}
.ui-datepicker-trigger {
	margin-left: 5px;
	position: relative;
	top: 3px;
	cursor: pointer;
}

</style>

<style>
   .text-center {
      padding-top: 90px;
   }

   .personalDoc {
      border: 3px solid #1921B1;
   }

   .btnRecording {
      position: relative;
      left: 45%;
      transform: translate(-50%, 0);
      margin-top: 2%;
      background-color: rgb(0, 2, 138);
   }
</style>


<div class="container">
<div class="row justify-content-center">
<div class="col-12">
<h1 class="text-center">Личный кабинет</h1>
</div>
<div class="col-6 personalDoc">
   <p>ID: <span><?php echo $_SESSION['id'] ?></span></p>
   <p>Login: <span><?php echo $_SESSION['login'] ?></span></p>
   <p>Имя: <span><?php echo $_SESSION['name'] ?></span></p>
   <form action="lk_obr.php" method="POST" class="border p-2">
      <p>Изменить имя<p>
      <input type="text" placeholder="Введите новое значение" name="name">
      <input type="submit" class="btn btn-primary" value="Изменить">
   </form>
   <p>Фамилия: <span><?php echo $_SESSION['lastname'] ?></span></p>
   <form action="lk_obr.php" method="POST" class="border p-2">
      <p>Изменить фамилию<p>
      <input type="text" placeholder="Введите новое значение" name="lastname">
      <input type="submit" class="btn btn-primary" value="Изменить">
   </form>
   <p>Марка мотоцикла: <span><?php echo $_SESSION['marka'] ?></span></p>
   <form action="lk_obr.php" method="POST" class="border p-2">
      <p>Изменить марку мотоцикла<p>
      <input type="text" placeholder="Введите новое значение" name="marka">
      <input type="submit" class="btn btn-primary" value="Изменить">
   </form>
   <p>Модель мотоцикла: <span><?php echo $_SESSION['model'] ?></span></p>
   <form action="lk_obr.php" method="POST" class="border p-2">
      <p>Изменить модель мотоцикла<p>
      <input type="text" placeholder="Введите новое значение" name="model">
      <input type="submit" class="btn btn-primary" value="Изменить">
   </form>
   <p>Год выпуска мотоцикла: <span><?php echo $_SESSION['year'] ?></span></p>
   <form action="lk_obr.php" method="POST" class="border p-2">
      <p>Изменить год выпуска мотоцикла<p>
      <input type="text" placeholder="Введите новое значение" name="year">
      <input type="submit" class="btn btn-primary" value="Изменить">
   </form>
</div>
</div>
<button type="button" class="btn btn-primary btnRecording" data-toggle="modal" data-target="#exampleModal">
  Записаться
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Записаться</h5>
        <form>
            <p><select name="select" size="3" multiple>
            <option selected value="s1">Техническое обслуживание</option>
            <option value="s2">Ремонт мотоцикла</option>
            <option value="s3">Доп.оборудование и тюнинг</option>
            </select>
         </form>
      </div>
      <div class="modal-body">
         <h5 class="modal-data" align="center">Укажите время и дату записи</h5>
         <input type="text" id="datepicker" placeholder="Выберите дату">
         <p><input type="time" name="cron" value="12:00" min="12:00" max="19:00"></p>
         <p><input type="submit"></p>
      </div>
    </div>
  </div>
</div>
</div>



<?php
require_once("components/footer.php");
?>

<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script src="https://snipp.ru/cdn/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
$.datepicker.setDefaults($.datepicker.regional['ru']);

$(function(){
	$("#datepicker").datepicker({
      minDate: 0
   });   
});


</script>