<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Introdução - PHP </title>
</head>
<body>

    <?php

    //Código php precisa estar dentro das tags

    //Declaração de Variável
    $nome = "Levi"; //String
    $altura = 1.73; //Real
    $idade = 21; //Inteiro
    $isAluno = true; //Booleano
    $texto = "Isso é diferente";
    $Texto = "Disso";

    //Escrever na tela

    echo $nome;

    echo "<br>";

    echo "$texto $Texto";

    echo "<br>";

    echo "Aula de PHP 12.05.2025";

    //Imprimir para o usuário: "Meu nome é XXXXX";

    echo "<br> Meu nome é $nome.";

    echo "<br> pulando linha <br> linha quebrada";

    //Quebrando linhas
    echo "<br><br><br><hr>";

    echo "<br> Nome: $nome <br> Idade: $idade <br> Altura: $altura";



    ?>

</body>
</html>