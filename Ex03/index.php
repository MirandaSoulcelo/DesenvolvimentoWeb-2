<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste</h1>
    <?php
        $nome = "Marcelo";
        $sobrenome = "Ferreira";
        const PAIS = "Brasil";//cosntante tem valor fixo e o nome dela tem que ser em Maiúsculo


        // 0x = hexadecimal 0b = binário 0 = Octal

         $n1 = 010;//Octal equivalente a 8
        $n2 = 0b1011;//binario 11
        $n3 = 0x1a;//Hexadecimal 26
        echo "$n1, ", "$n2, ", "$n3.<br/>";

        var_dump($n3);//var dump me dá os detalhes do valor, o tipo dele mostrando assim o tipo primitivo

        $n4 = pow(3,2);
        echo "<br/>$n4";
        echo "<br/> Muito Prazer, $nome $sobrenome! Você mora no ".PAIS;
    
    ?>
        
</body>
</html>