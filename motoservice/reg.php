<?php
    $title = "Регистрация"; 
    require_once("components/header.php"); 
?>

<style>

    body {
    background:url(img/backgroundReg.png) no-repeat;
    width: 100%;
    height: 70vh;
    background-size: cover;
    text-align: center;
    display:block;
    margin:auto;
    }

</style>

    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-12">
                <h1 class="my-4 text-center">Регистрация</h1>
            </div>
            <div class="col-6">
                <form action="reg_obr.php" method="POST" class="reg-form">   
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <input type="text" class="form-control" placeholder="Введите логин" name="login" required>
                </div>  
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span> <!-- <i></i> это иконка которую взяли с сайта https://fontawesome.ru/icon/ -->
                    </div>
                    <input type="password" class="form-control" placeholder="Введите пароль" name="password" required> 
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Введите имя" name="name" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Введите фамилию" name="lastname" required>
                </div>


                    <p>Мотоцикл</p>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-motorcycle" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Марка мотоцикла" name="marka" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-motorcycle" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Модель" name="model" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="год выпуска" name="year" required>
                </div>

                    
                    <input type="submit" value="Зарегистрироваться" class="btn btn-primary btn-block" > 
                </form>
            </div>
        </div>
    </div>
    
<?php
    require_once("components/footer.php"); 
?>

<style>
    .dowmbar {
        display: none;
    }
</style>