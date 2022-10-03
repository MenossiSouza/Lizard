<?php
    session_start();            // iniciar sessao
    require_once 'conexao.php'; // chamar conexao

if(isset($_POST['bt_entrar'])) {
    // pegar os dados postados e fazer o escape
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));

    // CONSULTAR NO BANCO DE DADOS
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha';";
    
    
    // EXECUTAR A INSTRUCAO SQL
    $resultado = mysqli_query($con, $sql);
    $language = mysqli_query($con, "SELECT nacionalidade from usuarios where email = '$email' and senha = '$senha'");
    $infolangue = mysqli_fetch_array($language);
    $lingue = $infolangue['nacionalidade'];
    if(mysqli_affected_rows($con) > 0) {
        // CRIAR ARRAY ASSOCIATIVO COM O RESULTADO DA CONSULTA
        $dados     = mysqli_fetch_array($resultado);
        
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem']  = "Login successfully!";
        $_SESSION['status']    = "success";
        $_SESSION['idusuario'] = $dados['idusuario'];
        $_SESSION['email']     = $dados['email'];
        if ($lingue == 'Portuguese Brazil'){
            header('Location: ../painel.php'); // REDIRECIONAR PARA O PAINEL PT BR
        } else if ($lingue == 'English'){
            header('Location: ../painel_eng.php');// REDIRECIONAR PARA O PAINEL ENG
        } else{
            header('Location: ../painel.php');// REDIRECIONAR PARA O PAINEL SPN
        }
    } else {
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem'] = "Login error! Invalid email or password";
        $_SESSION['status'] = "danger";
        header('Location: ../index.php'); // REDIRECIONAR PARA O INDEX
    }
    mysqli_close($con); // fechar conexao
}
