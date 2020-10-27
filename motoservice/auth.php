<?php
$title = "Аутентификация";
require_once("components/header.php");
?>

<style>
      .container {
            padding-top: 2%;
            
      }
</style>
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-12">
  <h1 class="my-4 text-center">Аутентификация</h1>
  </div>
  <div class="col-6">  
  
    <form action="auth_obr.php" method="POST" class="auth-form"> 
        <div class="input-group mb-3">
        <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Введите логин" name="login" required>  
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <input type="password" class="form-control" placeholder="Введите пароль" name="password">
        </div>
   <p class="error-message text-danger"></p>
        <input type="submit" value=Войти class="btn btn-primary btn-block">
  </form>
  </div>
  </div>
  </div>
  <script>  
  let authForm = document.querySelector(".auth-form"); 
  authForm.onsubmit = function(event) {
        event.preventDefault();
        send();
  }
  

  function send() { 
let formData = new FormData(authForm); 
let requestLink = authForm.getAttribute("action"); 
let requestMethod = authForm..getAttribute("method"); 
fetch(requestLink, { 
      method: requestMethod,
      body: formData,
})

.then(function(response) {return response.text()})
.then(function(result) {
      if (result == "ok") {
            window.location.href = "lk.php";
      } else {
            changeErrorMessage(result);
      }
})
  }
  



  function changeErrorMessage(message = "") { 
      if(!message) { 
      message = ""; 
      }
      let errorMessage = document.querySelector(".error-message");
      errorMessage.innerHTML = message; 
}
  
  </script>

<?php 
require_once("components/footer.php");
?>

<style>
    .dowmbar {
        display: none;
    }

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