<? get_header();
?>
<h1>Auth controller </h1>
<div class="container">



<?php
$user_list=getFromBd("SELECT login, pass FROM users"); 
$user_count=count($user_list[1]);
$register='deny';
foreach ($user_list[1] as $key => $value) {
    //print_r($value);
   
    

    if ( $value['login']==$_POST['username'] || ($value['pass']==md5($_POST['user_password']))  ){       
        $register='allow';
    }
   
   
    
   
}
if($register=='allow'){
    echo('Авторизация разрешена');
}else{
    echo('Авторизация Запрещена');
    include('auth.php');
}
?>
</div>

