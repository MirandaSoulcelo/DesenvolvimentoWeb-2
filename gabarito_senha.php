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
//Nesta linha eu  estou declarando uma variavel 'password' e já atribuindo o valor que o usuário digitou que está dentro da super global $_POST



if($password == 'GodBidof')
{
    echo('acertou a senha irmão!');
    die();//Eu usei a função die() dentro do if para interromper o programa caso a pessoa acerte a senha. Ou seja, o acerto não será gravado no documento Historico de Erros

}
else
{
    echo('Errou, Errou feio, errou rude');
}



$filename = "HistoricoDeErros.txt";//Aqui a variável está recebendo o nome de Historico de Erros


if(!file_exists("HistoricoDeErros.txt"))// Preste atenção no exclamação, ele nega a afirmação de "file_exists", logo vai significar : Caso ela NÃO exista
{

   //Note que eu estou declarando a variável $Baú dentro do if, ela quem conterá esse ARQUIVO que recebeu o nome de Historico de erros

    $Bau = fopen("HistoricoDeErros.txt", 'w');//fopen abre o arquivo para que possa ser nomeado, e o modo de escrita é 'w', apenas escrita e se o arquivo não existir, ele tenta criá-lo.
}


else
{
    $Bau = fopen("HistoricoDeErros.txt", 'a');// aqui a premissa é um pouco parecida, mas caso o arquivo ja exista, o mode de escrita 'a' não vai apagar o que ja foi gravado, ele vai colocar o ponteiro no final do arquivo, assim ele não o sobreescreve
}

fwrite($Bau, "$password\n");// a função fwrite é para escrever, é ela que vai colocar o que contém na variável password, dentro do arquivo que está dentro da variavel Bau

fclose($Bau);//fclose vai fechar o arquivo após o término da manipulação dele e como essa função descarrega automaticamente os buffers, acredito que não precise de um fflush antes dela
?>
</body>
</html>