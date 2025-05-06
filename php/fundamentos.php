<?php
//Estrutura do PHP
/**
 * Comentário em bloco
 * 
 * 
 **/

    echo"Olá, mundo! <br> \n";

    //Tipos de dados
    //String tioSAM;

/**
 * Para declarar uma variável em PHP
 * devemos utilizar o sinal de $ 
 */

    $nome = "Torantina Macedo"; //string
    $idade = 24;    //inteiro
    $altura = 1.71; // double
    $peso = 80.6; //double
    $is_Vacinada=true; //Boolean

    echo"Nome: $nome <br> \n"; 
    echo"Idade: $idade <br> \n";
    echo"Altura: $altura <br> \n";
    echo"Peso: $peso <br> \n";
    echo"Vacinada?: $is_Vacinada <br> \n";

    //Condicionais
    
    if($idade >= 18){

    echo "$nome, é maior de idade e possui $idade anos";

    }else{

        echo "$nome, é menos de idade e possui $idade anos";

    }

    //Laços de repetição
    /**
     * FOR
     * WHILE
     * DO WHILE
     */

    for($i = 1 ; $i <= 100; $i++){
        if($i % 2 == 0){
        
        echo "Número par \n";
        echo "$i <br>\n";

    }
}

    

?>