
<?
$url = $_SERVER['REQUEST_URI'];





if ($url=="/register"){  
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
else{  


//searching route in db
$page_list=getFromBd("SELECT PageLink, PagePath FROM routing"); 

$has_path='false';
foreach ($page_list[1] as $key => $value) { 
    $has_path='false';//variable 
    if ( $value['PageLink']==$url){       
       // echo('путь из бд');
        require  ($_SERVER['DOCUMENT_ROOT'].$value['PagePath']);
        $has_path='true';
        break;
    }
    if( $has_path=='true'){break;}
}
if ($has_path=='false'){
    require  ($_SERVER['DOCUMENT_ROOT'].'/404.php'); 
}
$has_path=='false';
}


?>
  <div   class="toast"  data-autohide="false" style="position: fixed; top: 90px; right: 0;opacity: 1;z-index: 9999;">
    <div class="toast-header text-white bg-dark  ">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Текущий Url</strong>
     
      
    </div>
    <div class="toast-body">
     page_url = <?echo $url; ?>
    </div>
  </div>