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
    $arr=array();$arr2=array();

   
    //getting column names  
    $values = $result->fetch_all(MYSQLI_ASSOC);

    if(!empty($values)){
        $columns = array_keys($values[0]);
    }
  
    ///$values- список всех строк coloumns - название стобцов

      
   

?>
    <div id='toast' class="toast" style="position: absolute; top: 0; right: 0;opacity: 1;z-index: 9999;">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">SQL</strong>
      <small><?echo date("H:i:s"); ?></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
    Выполнение запроса прошло успешно
    </div>
  </div>

<?

    mysqli_free_result($result);
}

// закрываем подключение
mysqli_close($link);

return array($columns,$values);

}



function insertToBd($query){
    global $host, $user, $password, $database;  
    $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $result = mysqli_query($link, $query); 
   
    
    if(mysqli_error($link))
{
    mysqli_close($link);
    return ('false'); 
    die();
   
}
mysqli_close($link);


}





/* 
 echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
    for ($i = 1 ; $i < $rows+1 ; ++$i)
    {
      
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < $col ; ++$j){
               
                array_push($arr2, $row[$j]);
                
                echo "<td>$row[$j]</td>";
            }
         
            array_push($arr, $arr2);
            $arr2=[];
        echo "</tr>";
    }
    echo "</table>";
    */

?>


