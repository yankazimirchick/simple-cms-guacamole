
<?
$url = $_SERVER['REQUEST_URI'];
echo $url; 



if ($url=="/"){  
    require  ($_SERVER['DOCUMENT_ROOT'].'/pages/main_page.php'); 
}

elseif ($url=="/admin"){  
    require  ($_SERVER['DOCUMENT_ROOT'].'/pages/admin/admin.php'); 
}
elseif ($url!=""){  

    //check path in bd
    //include page if exist 
    require  ($_SERVER['DOCUMENT_ROOT'].'/404.php'); 
}

/*
else{

 if (file_exists($url)) {
    require ($url);   
 }
else{
    require ($_SERVER['DOCUMENT_ROOT'].'/404.php');
}
}*/

?>