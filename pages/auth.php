<? get_header();
?>

<div style="background-color:#f5f5f5;min-height: 86vh;">


  <div class="container">


    <form class="form-signin" method="POST" name="authorization" action="/action_auth">


      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Вход</h1>
      </div>
      <input placeholder="Логин:" class="form-control" type="text" name="username"><br>
      <input placeholder="Пароль:" class="form-control" type="password" name="user_password"><br>
      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Вход">
    </form>
  </div>

</div>


<?  get_footer(); ?>