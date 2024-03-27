<?php
    if(isset($_POST["submit"]))
    {
        include_once("config.php");
        $name = $_POST["name"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome, email, cpf) VALUES('$name', '$email', '$cpf')");

    }
    $name = $_POST["name"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];

    $filename = "BancoCadastro.php";

    if(!file_exists("BancoCadastro.php"))
    {
        $Bau = fopen("BancoCadastro.php", "w");
    }

    else
    {
        $Bau = fopen("BancoCadastro.php", "a");
    }

    fwrite($Bau, "Nome: $name\nCPF: $cpf\nEmail: $email\n-------------------\n");
    
    fclose($Bau);

    
    header("location: welcome.php");
    



?>