<?php
require_once "conexion.php";
//require_once "Criptografia.php";
$nombre = htmlspecialchars($_POST['login_username'],ENT_QUOTES,'utf-8');  // anti XSS Cross Site Scripting
$_nombre = addslashes($nombre);
$password = htmlentities($_POST['login_password'],ENT_QUOTES,'utf-8');    // anti XSS Cross Site Scripting
$_password = strip_tags($password);
//$__password=Criptograma::encryption($_password);
//=====================================================================
         $result = mysqli_query($conexion  , "call Login_Tipo('".$_nombre."','".$_password."')");
         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
        ////////////////////////////////////////////////////////    	
        $id= $row['Id'];
        $nom_user= $row['Nombre'];
        $cat= $row['Categoria'];
        $State=$row['Estado'];           
        ////////////////////////////////////////////////////////		
        session_start();
        $_SESSION["Id"]=$id;
        $_SESSION["Usuario_Activo"]=$nom_user;
				$_SESSION["categoria"]=$cat;
			  $_SESSION["Estado"]=$State;
      	$_SESSION["autenticar"] = "Ok";
        ////////////////////////////////////////////////////////
      if ($State==1){  
        // Inicio Validacion de estado
        if($cat ==1) {
          $_SESSION["categoria"]= 1;
          header('location: ../Administrador.php');
          }
        ////////////////////////////////////////////////////////
          if($cat ==2) {
            $_SESSION["categoria"]=2;
           header('location: ../Cliente.php');
          }
        //Fin Validador estado
      }else{
          $_SESSION["Inactivo"] = "El Usuario se Encuentra Inactivo";
          echo'<script type="text/javascript">window.location.href="../index.php";</script>';
      }         
        ////////////////////////////////////////////////////////
        }   
          }else {
            $_SESSION["Inactivo"] = "Usuario o Contraseña No Coinciden";
            echo'<script type="text/javascript">window.location.href="../index.php";</script>';
        // echo'<script type="text/javascript">alert("Usuario o Contraseña No Coinciden");window.location.href="../index.php";</script>';
         }
          mysqli_close($conexion);
?>