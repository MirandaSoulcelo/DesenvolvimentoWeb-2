<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php
print_r($_POST);

$password = $_POST["senha"];



if($password == 'marcelinho')
{
    echo('acertou a senha irmão!');
    
    
}
else
{
    echo('Errou, Errou feio, errou rude');
}



$filename = "HistoricoDeErros.txt";


if(!file_exists("HistoricoDeErros.txt"))
{
    $Bau = fopen("HistoricoDeErros.txt", 'w');
}

else
{
    $Bau = fopen("HistoricoDeErros.txt", 'a');
}

fwrite($Bau, "$password\n");
fflush($Bau);
fclose($Bau);


?>
</body>
</html>