<? get_header();
?>
<h1>Registration</h1>
<div class="container">



</div>


<?

$regstatus=insertToBd("INSERT INTO `users` (`id`, `login`, `pass`, `email`, `city`, `tel`) VALUES (NULL, '".$_POST['username']."', '".md5($_POST['user_password'])."', '".$_POST['user_email']."', '".$_POST['user_city']."', '".$_POST['user_tel']."')");

if($regstatus=='false'){
    echo('<p class="p-3 mb-2 bg-danger text-white">User or Email exist.</p>');
}else{
    echo('<p class="p-3 mb-2 bg-success text-white">User '.htmlspecialchars($_POST['username']).'registered.</p>');
}
    

?>




