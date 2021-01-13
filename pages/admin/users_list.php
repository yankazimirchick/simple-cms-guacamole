

<h2>Список пользователей </h2>

<pre>
<?php
$user_list=getFromBd("SELECT * FROM users"); 
echo $user_list;
?>
</pre>