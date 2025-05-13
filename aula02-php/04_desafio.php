<?php

$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if($media >= 9 && $media <= 10) {

    echo "$nome, sua nota: MB e sua média: $media";

}else if($media >= 7 && $media <= 8){

    echo "$nome, sua nota: B e sua média: $media";

}else if($media >= 5 && $media <= 7){

    echo "$nome, sua nota: R e sua média: $media";

}else if($media >= 0 && $media <= 5){

    echo "$nome, sua nota: I e sua média: $media";

}


?>