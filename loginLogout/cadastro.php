<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    header("location: index.php");
    exit;
}


?>



<!DOCTYPE html>
<html lang="pt_BR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name= "Viewport" content= "width=device-width
    initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href=Css/Form.css>
    <script src="https://kit.fontawesome.com/69204fda25.js" crossorigin="anonymous">
    </script>
    <script>
            function removeRequired()
            {
                var inputFields= document.querySelectorAll("input[required]");
                inputFields.forEach(function(input)
                {
                    input.removeAttribute("required");
                });
                <?php
                     if(isset($_POST["return"]))
                     {
                         header("location: welcome.php");
                         die();
                     } 
                ?>
               
            }
        </script>
  
</head>
<body>
    <div id="form">
       
        <form action="Cadastro_Pessoas.php" method="post">
        <h2 class="title">Cadastro</h2>
        
        <label for="name">Nome</label>
        <div class="input">
               
            <input type="text" id="name" name="name"  placeholder="Nome" id="Inputr" required>
            <span class="help-block"></span>
            </div>

            <label for= "email">E-mail</label>

            <div class="input">
               
                <input type="email" name="email"  placeholder="E-mail" id="Inputr" required>
                <span class="help-block"></span>
            </div>    

            <label>CPF</label>
            
            <div class="input">
               
                <input type="text" name="cpf"  placeholder="000.000.000-03" id="Inputr" required>
                <span class="help-block"></span>
            </div>

            <div id= "btn">
                <button type="submit" class="btn btn-primary" value="Acessar" name="submit" id="submit">Enviar</button>
            </div>

            <div id= "btn">
                <button type="submit" onclick="removeRequired()"  name="return">Voltar</button>
            </div>


            
        </form>
        
       
    </div>    
</body>
</html>