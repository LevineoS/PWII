<?php

    include("conexao.php");
    
    try{

        //Verificar se o nome do Usuario já existe
        $varVerifica = $pdo->prepare("SELECT COUNT(*) FROM login WHERE usuario = :usuario");
        $varVerifica -> bindParam(':usuario', $usuario);
        $varVerifica -> execute();


        if($varVerifica->fetchColumn() > 0){

            echo "Usuário ja existente";
            exit;

        }

        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        
        //iniciar uma transação
        $pdo->beginTransaction();

        //cadastrar/inserir usuários na tabela de login
        $varLogin = $pdo->prepare("INSERT INTO login (usuario, senha) VALUES (:usuario, :senha)");
        $varLogin -> bindParam(':usuario', $usuario);
        $varLogin -> bindParam(':senha', $senha);
        $varLogin -> execute();


        //preciso pegar o ID do login, para inserir na tabela usuário, pois existe um relacionamento entre elas.
        $id_login = $pdo->lastInsertId();

        //Cadastrar/Inserir usuários na tabela de usuario
        $varUsuarios = $pdo->prepare("INSERT INTO usuario(nome, email, id_login) VALUES (:nome, :email, :id_login)");
        $varUsuarios -> bindParam(":id_login", $id_login);
        $varUsuarios -> bindParam(":nome", $nome);
        $varUsuarios -> bindParam(":email", $email);
        $varUsuarios -> execute();

        $pdo->commit();
        echo"Cadastro Realizado com Sucesso!";
    }catch(PDOException $e){

        $pdo->rollBack();
        echo "Erro ao cadastrar". $e->getMessage();

    }
    
?>