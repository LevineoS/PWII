<?php

echo "<h2> Exemplo 1 <h2>";

$idade = 18;
$isCNH = true;
if($idade >= 18 && $isCNH){

    echo "Maior de idade e está apto a dirigir <br>";

}else if ($idade < 18 && !$isCNH){

    echo "Pode tirar a CNH, porém não pode dirigir <br>";

}else{

    echo "Não está apto para dirigir";

}
echo"<br><br><hr>";
echo "<h2> Exemplo 2 </h2>";

$possuiAcesso = false;
if(!$possuiAcesso){

    echo "Acesso Negado <br>";

}else{

    echo "Acesso Autorizado <br>";

}

echo"<br><br><hr>";

echo "<h2> Exemplo 3 </h2>";

$mediaAluno = 9;

if($mediaAluno >= 9){

    echo "Nota: MB";

}else if($mediaAluno >= 7 && $mediaAluno <= 8){

echo "Nota: B";

}else if($mediaAluno >= 5 && $mediaAluno <= 7){

echo "Nota: R";

}else if($mediaAluno >= 0 && $mediaAluno <= 5){

echo "Nota: I";

}else{

    echo "Média Inválida";

}

echo"<br><br><hr>";

?>