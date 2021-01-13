<? get_header();
?>

<div style="background-color:#f5f5f5;min-height: 86vh;">


<div class="container">


<form class="form-signin" method="POST" name="authorization" action="/action_register">


<div class="text-center mb-4">
   
    <h1 class="h3 mb-3 font-weight-normal">Registration</h1>
    <p>Enter your registration data.</p>
    <a href="/auth">If you registered. Click this link!</a>
  </div>








     <input placeholder="Логин:" class="form-control" type="text" name="username"><br>
     <input placeholder="Пароль:" class="form-control" type="password" name="user_password"><br>
     <input placeholder="Email:" class="form-control" type="text" name="user_email"><br>
     <input placeholder="Город:" class="form-control" type="text" name="user_city"><br>
     <input placeholder="Телефон :" class="form-control" type="text" name="user_tel"><br>
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Регистрация">
    
</form>
</div>


</div>


<?  get_footer(); ?>
