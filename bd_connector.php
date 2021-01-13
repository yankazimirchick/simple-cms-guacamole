<?php 


$host = 'localhost'; // адрес сервера 
$database = 'custom_cms'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль


function getFromBd($query){
    global $host, $user, $password, $database;  
    $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));





$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 



if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    $col = mysqli_num_fields($result);
    
    echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < $col ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    
    

    echo "Выполнение запроса прошло успешно <br>";
    mysqli_free_result($result);
}

// закрываем подключение
mysqli_close($link);
return $result ;



}

?>