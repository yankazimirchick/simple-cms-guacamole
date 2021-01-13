<? get_header();
?>
<h1>Регистрация</h1>
<div class="container">



</div>

Логин <?php echo htmlspecialchars($_POST['username']); ?>.
Пароль<?php echo  $_POST['user_password']; ?> 
Email <?php echo   $_POST['user_email']; ?> 
Город <?php echo   $_POST['user_city']; ?>
Телефон <?php echo $_POST['user_tel']; ?>

<?

insertToBd("INSERT INTO `users` (`id`, `login`, `pass`, `email`, `city`, `tel`) VALUES (NULL, '".$_POST['username']."', '".md5($_POST['user_password'])."', '".$_POST['user_email']."', '".$_POST['user_city']."', '".$_POST['user_tel']."')")

?>


<form method="POST" name="authorization" action="/register.php">
    Логин: <input type="text" name="username"><br>
    Пароль: <input type="password" name="user_password"><br>
    email: <input type="password" name="user_email"><br>
    Город: <input type="text" name="user_city"><br>
    Телефон : <input type="text" name="user_tel"><br>
    <input type="submit" value="Регистрация">
</form>

