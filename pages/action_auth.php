<? get_header();
?>
<h1>Авторизация в системе </h1>
<div class="container">



</div>

Логин:  <?php echo htmlspecialchars($_POST['username']); ?><br>
Пароль: <?php echo  $_POST['user_password']; ?> <br>

<?php
$user_list=getFromBd("SELECT login, pass FROM users"); 

foreach ($user_list[1] as $key => $value) {
    //print_r($value);
   
    

    if ( $value['login']==$_POST['username'] || ($value['pass']==md5($_POST['user_password']))  ){      
        echo('Авторизация разрешена');
        
       
    }else($count){
        echo('Неверный пароль ');
    }

   

    
    
   
}

?>


