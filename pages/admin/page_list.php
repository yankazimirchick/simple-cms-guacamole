
<div class="container">


<h2>Список Страниц </h2>


<?php
$user_list=getFromBd("SELECT * FROM routing"); 
//echo $user_list;
echo("<table class='table'>");

echo("<thead class='thead-dark'>");


foreach ($user_list[0] as $key => $value) {
    //print_r($value);
    echo("<th>");
   
        print_r($value);
     
    echo("</th>");
}
echo("</thead>");


foreach ($user_list[1] as $key => $value) {
    //print_r($value);
    echo("<tr>");
    foreach ($value as $key2 => $value2) {
        echo("<td>");
        print_r($value2);
        echo("</td>");
    }
    echo("</tr>");
}
echo("</table>");
?>


</div>
