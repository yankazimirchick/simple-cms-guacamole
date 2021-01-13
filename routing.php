
<?
$url = $_SERVER['REQUEST_URI'];




if ($url=="/"){  
    require  ($_SERVER['DOCUMENT_ROOT'].'/pages/main_page.php'); 
}

elseif ($url=="/admin"){  
    require  ($_SERVER['DOCUMENT_ROOT'].'/pages/admin/admin.php'); 
}
elseif ($url=="/register"){  
    require  ($_SERVER['DOCUMENT_ROOT'].'/pages/register.php'); 
}
elseif ($url=="/auth"){  
    require  ($_SERVER['DOCUMENT_ROOT'].'/pages/auth.php'); 
}
elseif ($url=="/action_register"){  
    require  ($_SERVER['DOCUMENT_ROOT'].'/pages/action_register.php'); 
}
elseif ($url=="/action_auth"){  
    require  ($_SERVER['DOCUMENT_ROOT'].'/pages/action_auth.php'); 
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
echo $url; 
?>