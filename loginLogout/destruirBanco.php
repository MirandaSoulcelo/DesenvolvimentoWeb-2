<?php
    
    session_start();
    
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
        exit;
    }
    
    
  
    if(file_exists("BancoCadastro.php"))
    {
        unlink("BancoCadastro.php");

        include_once("config.php");
        $result = mysqli_query($conexao, "TRUNCATE TABLE cadastro");
        header("location: welcome.php");
        exit;

    }
    else
    {   
        header("location: welcome.php");
        exit;
  
    }
?>