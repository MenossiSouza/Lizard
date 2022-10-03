<?php

    // iniciar uma nova sessão
    session_start();

    //chamar nossa conexao
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])) {
        //pegar os dados postados e fazer o escape
        $nome= mysqli_real_escape_string($con, $_POST['nome']);
        $nacionalidade= mysqli_real_escape_string($con, $_POST['nacionalidade']);
        $email= mysqli_real_escape_string($con, $_POST['email']);
        $senha= md5(mysqli_real_escape_string($con, $_POST['senha']));

        //Instrução SQL
        $sql= "INSERT INTO usuarios (nome, nacionalidade, email, senha) VALUES ('$nome', '$nacionalidade', '$email', '$senha')";

        //Executar instrucao SQL e verificar sucesso
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Register succsesfully";
            $_SESSION['status'] = "success";
            header('Location: ../index.php');

        }
        else {
            $_SESSION['mensagem'] = "Register failed! Please contac the administrator";
            $_SESSION['status'] = "danger";
            header('Location: ../index.php');
        }

        //Fechar conexao
        mysqli_close($con);
    }


