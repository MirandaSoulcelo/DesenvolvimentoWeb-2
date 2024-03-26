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
    }
    else
    {   
        header("location: welcome.php");
  
    }
?>