<?php
//session_save_path("temp" );
session_start();
//print_r($_SESSION);
$estado = $_SESSION['autenticar'];
if($estado != "Ok"){ 
session_start();
session_unset();
session_destroy();
header("Location: login.php");
}else{
$cate=$_SESSION["categoria"];
if($cate != 2){
session_start();
session_unset();
session_destroy();
header("Location: login.php");
//echo "No es administrador" ; 
}
else{
//echo "es administrador" ;
return true;
}
} 
?>