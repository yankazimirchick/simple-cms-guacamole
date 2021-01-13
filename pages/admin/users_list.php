


<div class="container">

<h2>User List </h2>

<?php
$user_list=getFromBd("SELECT login,email,city,tel FROM users"); 


echo("<table class='table' >");
echo("<thead class='thead-dark'>");


foreach ($user_list[0] as $key => $value) {
    //print_r($value);
    echo("<th>");
   
        print_r($value);
     
    echo("</th>");
}
echo("<th> Edit</th>");
echo("</thead>");


foreach ($user_list[1] as $key => $value) {
    //print_r($value);
    echo("<tr>");
    foreach ($value as $key2 => $value2) {
        echo("<td>");
        print_r($value2);
        echo("</td>");
    }

    echo("<td><div class='btn-group' role='group'> <button class='btn btn-warning'>Edit</button> <button class='btn btn-danger'>delete</button> <button class='btn text-white bg-dark  '>disable</button></div>  </td>");

    
    
    
    echo("</tr>");
    
}
echo("</table>");
?>


</div>